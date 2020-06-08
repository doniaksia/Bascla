package com.mycompany.myapp.velo.views;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.ShareButton;
import com.codename1.components.SpanLabel;

import com.codename1.components.ToastBar;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import com.codename1.io.Storage;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.payment.Purchase;
import com.codename1.payment.PurchaseCallback;
import com.codename1.payment.Receipt;
import com.codename1.payment.ReceiptStore;
import com.codename1.social.Login;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Slider;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.ImageIO;
import com.codename1.util.SuccessCallback;
import com.mycompany.myapp.Utilisateur;
import com.mycompany.myapp.VarGlobales;
import com.mycompany.myapp.velo.entites.Categorie;
import com.mycompany.myapp.velo.entites.Velo;
import com.mycompany.myapp.velo.services.VeloService;
import java.io.IOException;
import java.io.OutputStream;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Calendar;
import java.util.Date;
import java.util.List;

public class VeloView extends BaseVelo implements PurchaseCallback {
    
    //NOTE: x button when press on search ..... fixe adresse size

    public static  String[] PRODUCTS = {
        
    };
    
    
    
    private Form form ;
    private Toolbar tb;
    private VeloService es;
    private List<Velo> listEvenements;
    private EncodedImage enc;
    private String urlImage = "http://localhost/mobile/images/";
    private Container evenements;
    private TextField searchBar;
    private Container topFilter;
    private List<Categorie> listCategories;
    
    
    
    public Form rent( int id ) {    
        
          final String  SKU_WORLD_1_MONTH ="com.codename1.bascla"+id+".subscribe.1month";
     final  String SKU_WORLD_1_YEAR = "com.codename1.bascla"+id+".subscribe.1year";
    
     String[] PRODUCTS1 = {
      "com.codename1.bascla"+id+".subscribe.1month",
         "com.codename1.bascla"+id+".subscribe.1year",
       
    };
     PRODUCTS=PRODUCTS1;
        
        final String RECEIPTS_KEY = "RECEIPTS"+id;
        
        
        
        Purchase.getInAppPurchase().setReceiptStore(new ReceiptStore() {

            @Override
            public void fetchReceipts(SuccessCallback<Receipt[]> callback) {
                Storage s = Storage.getInstance();
                Receipt[] found;
                synchronized(RECEIPTS_KEY) {
                    if (s.exists(RECEIPTS_KEY)) {
                        List<Receipt> receipts = (List<Receipt>)s.readObject(RECEIPTS_KEY);
                        found = receipts.toArray(new Receipt[receipts.size()]);
                    } else {
                        found = new Receipt[0];
                    }
                }
                // Make sure this is outside the synchronized block
                callback.onSucess(found);
            }

            @Override
            public void submitReceipt(Receipt receipt, SuccessCallback<Boolean> callback) {
                Storage s = Storage.getInstance();
                synchronized(RECEIPTS_KEY) {
                    List<Receipt> receipts;
                    if (s.exists(RECEIPTS_KEY)) {
                        receipts = (List<Receipt>)s.readObject(RECEIPTS_KEY);
                    } else {
                        receipts = new ArrayList<Receipt>();
                    }
                    // Check to see if this receipt already exists
                    for (Receipt r : receipts) {
                        if (r.getStoreCode().equals(receipt.getStoreCode()) && 
                                r.getTransactionId().equals(receipt.getTransactionId())) {
                            // If we've already got this receipt, we'll just this submission.
                            return;
                        }
                    }
                    
                    // Now try to find the current expiry date
                    Date currExpiry = new Date();
                    List<String> lProducts = Arrays.asList(PRODUCTS);
                    for (Receipt r : receipts) {
                   
                        if (!lProducts.contains(receipt.getSku())) {
                            continue;
                        }
                        if (r.getCancellationDate() != null) {
                            continue;
                        }
                        if (r.getExpiryDate() == null) {
                            continue;
                        }
                        if (r.getExpiryDate().getTime() > currExpiry.getTime()) {
                            currExpiry = r.getExpiryDate();
                        }
                    }
                    
                    // Now set the appropriate expiry date by adding time onto
                    // the end of the current expiry date
                    Calendar cal = Calendar.getInstance();
                    cal.setTime(currExpiry);
                   
              
                    if(receipt.getSku()==SKU_WORLD_1_MONTH){
                       
                              
                        cal.add(Calendar.MONTH, 1);
                        
                            }
                    
                    else if(receipt.getSku()==SKU_WORLD_1_YEAR){
                         
                         cal.add(Calendar.YEAR, 1);
                           }
                    
                    
                    
                    Date newExpiry = cal.getTime();
                    
                    receipt.setExpiryDate(newExpiry);
                    receipts.add(receipt);
                    s.writeObject(RECEIPTS_KEY, receipts);
                    
                }
                // Make sure this is outside the synchronized block
                callback.onSucess(Boolean.TRUE);
            }
            
        });
        
        
        
        
        
        
        
        
        
        
        
        
          
    
    
      
     
     
         Purchase iap = Purchase.getInAppPurchase();
        Form hi = new Form("rent bike ", new BoxLayout(BoxLayout.Y_AXIS));
        Button rentWorld1M = new Button("Rent bike 1 Month");
        rentWorld1M.addActionListener(e->{
            String msg = null;
            if (iap.isSubscribed(PRODUCTS)) {
                msg = "You are already renting the bike until "+iap.getExpiryDate(PRODUCTS)+".  Extend it for one more month?";
            } else {
                msg = "Rent the bike for 1 month?";
            }
            if (Dialog.show("Confirm", msg, "Yes", "No")) {
                Purchase.getInAppPurchase().purchase(SKU_WORLD_1_MONTH);
            }
        });
       
        Button rentWorld1Y = new Button("Rent bike 1 Year");
        rentWorld1Y.addActionListener(e->{
            String msg = null;
            if (iap.isSubscribed(PRODUCTS)) {
                msg = "You are already renting the bike until "+iap.getExpiryDate(PRODUCTS)+".  Extend it for one more year?";
            } else {
                msg = "Rent the bike for 1 year?";
            }
            if (Dialog.show("Confirm", msg, "Yes", "No")) {
                
                
                Purchase.getInAppPurchase().purchase(SKU_WORLD_1_YEAR);
            }
        });
        
        SpanLabel rentalStatus = new SpanLabel("Loading rental details...");
        Button syncReceipts = new Button("Synchronize Receipts");
        
        syncReceipts.addActionListener(e->{
            
            iap.synchronizeReceipts(0, res->{
                if (iap.isSubscribed(PRODUCTS)) {
                    rentalStatus.setText("bike rental expires "+iap.getExpiryDate(PRODUCTS));
                } else {
                    rentalStatus.setText("You don't currently have a subscription to the bike");
                }
                hi.revalidate();
            });
        });
        
        hi.add(rentWorld1M).add(rentWorld1Y).add(rentalStatus).add(syncReceipts);
        hi.show();
        
        // Now synchronize the receipts
        iap.synchronizeReceipts(0, res->{
            if (iap.isSubscribed(PRODUCTS)) {
                rentalStatus.setText("bike rental expires "+iap.getExpiryDate(PRODUCTS));
            } else {
                rentalStatus.setText("You don't currently have a subscription to the bike");
            }
            hi.revalidate();
        });
        
        
        
        
         hi.getAllStyles().setBgColor(0xf4f9f4);
        hi.getAllStyles().setOpacity(255);
        tb = hi.getToolbar();
        addToolBar(tb);
        tb.addMaterialCommandToLeftBar("retour", FontImage.MATERIAL_ARROW_BACK, (e)->{
            VeloView ev = new VeloView();
            ev.getForm().show();
        });
        
        
        
        
        
        return hi;
        
     
    }
    
    
    public VeloView(){
        
        form = new Form();
        Container center_form = new Container(BoxLayout.y());
        center_form.setScrollableY(true);
        es = new VeloService();
        listEvenements = es.getEvents();
        listCategories = es.getCategories();
        setForm();
        setEvents(listEvenements);
        Container filterContainer = new Container(new GridLayout(1, 2));
        
        
        topFilter = new Container(BoxLayout.y()); 
        setFilter();
        TextField searchText = new TextField(null, "chercher par marque ...");
        searchText.setHidden(true);
        //*********************************************************
        Button search = new Button(FontImage.MATERIAL_SEARCH);
        search.getAllStyles().setPadding(3, 3, 3, 3);
        Container searchCont = new Container(new FlowLayout(RIGHT, CENTER));
        searchCont.add(search);
        searchCont.setWidth(20);
        Container searchBorder = new Container(new BorderLayout());
        searchBorder.add(BorderLayout.SOUTH,searchCont);
        search.addActionListener((l)->{
            if (searchText.isHidden()){
                searchText.setHidden(false);
            }
            else {
                searchText.setHidden(true);
                searchText.setText(null);
                evenements.removeAll();
                setEvents(listEvenements);
            }
            form.refreshTheme();
        });
        searchText.addDataChangedListener((l,i)->{
            List<Velo> tomponList = new ArrayList<>();
            for (Velo ev : listEvenements){
                if (ev.getTitre().toUpperCase().trim().startsWith(searchText.getText().toUpperCase().trim()))
                    tomponList.add(ev);
            }
            evenements.removeAll();
            setEvents(tomponList);
            form.revalidate();
        });
        //*********************************************************
        center_form.addAll(topFilter,searchText);
        center_form.add(evenements);
        form.add(BorderLayout.CENTER,LayeredLayout.encloseIn(center_form,searchBorder));
    }
    
    public void setFilter(){
         Button filtrerShow = new Button("Filter ");
        filtrerShow.addActionListener((l)->{
            topFilter.removeAll();
            topFilter.setUIID("filter_con");
            ComboBox produits=new ComboBox("produits","mes produits","autre");
            
            TextField organisateur = new TextField(null,"marque du velo");
            Picker date = new Picker();
            date.setDate(null);
            ComboBox categories = new ComboBox();
            categories.addItem("categories");
            categories.addItem("enfants");
            categories.addItem("professionnel");
            for (Categorie c : listCategories){
                categories.addItem(c.getName());
            }
           
            Container prix_cont = new Container(new GridLayout(1,2));
             Slider s = new Slider();
          Label lab=new Label();
          s.addActionListener(new ActionListener() {
               @Override
               public void actionPerformed(ActionEvent evt) {
                   lab.setText(" : "+s.getProgress());
               }
           });
                s.setEditable(true);
                s.animate();
            s.setMaxValue(500);
            
            prix_cont.addAll(s,lab);
            Button appliquer = new Button("appliquer");
            appliquer.setUIID("primary_button");
            
            Button close = new Button("all");
            close.setUIID("primary_outline_button");
            
            close.addActionListener((el)->{
                topFilter.removeAll();
                evenements.removeAll();
                setEvents(listEvenements);
                setFilter();
                form.revalidate();
            });
            appliquer.addActionListener((el2)->{
                List<Velo> filtredEvents = listEvenements;
                SimpleDateFormat dateFormat = new SimpleDateFormat("yyyy/MM/dd");
                if (!organisateur.getText().isEmpty())
                {
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                        if (e.getTitre().equals(organisateur.getText()))
                            tomponList.add(e);
                    }
                    filtredEvents = tomponList;
                }
                if (date.getDate() != null){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                        if (dateFormat.format(date.getDate()).equals(dateFormat.format(e.getDate())))
                            tomponList.add(e);
                    }
                    filtredEvents = tomponList;
                }
               
                              
                if (categories.getSelectedIndex()==2){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                       
                            if(e.getLatLng().equals("professionnel")){
                        tomponList.add(e);
                            }
                        
                       
                        
                    }
                    filtredEvents = tomponList;
                } 
                 if (categories.getSelectedIndex()==2){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                       
                            if(e.getLatLng().equals("professionnel")){
                        tomponList.add(e);
                            }
                        
                       
                        
                    }
                    filtredEvents = tomponList;
                } 
                
                
                if (categories.getSelectedIndex()==1){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                       
                            if(e.getLatLng().equals("enfants")){
                        tomponList.add(e);
                            }
                        
                       
                        
                    }
                    filtredEvents = tomponList;
                } 
                
                
                
                
                if (produits.getSelectedIndex()==1){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                       
                            if(e.getusername().equals(VarGlobales.getusername())){
                        tomponList.add(e);
                            }
                        
                       
                        
                    }
                    filtredEvents = tomponList;
                }  
                
                if (produits.getSelectedIndex()==2){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                       
                            if(e.getusername().equals(VarGlobales.getusername())==false){
                        tomponList.add(e);
                            }
                        
                       
                        
                    }
                    filtredEvents = tomponList;
                }  
                
                
                if (s.getProgress()!=0){
                    List<Velo> tomponList = new ArrayList<>();
                    for (Velo e : filtredEvents){
                        if (s.getProgress()==e.getPrix())
                        tomponList.add(e);
                    }
                    filtredEvents = tomponList;
                }     
                
                

                evenements.removeAll();
                setEvents(filtredEvents);
                form.revalidate();
            });
            Container butt_cont = new Container(new GridLayout(1, 2));
            butt_cont.addAll(appliquer, close);
            topFilter.addAll(new Label("marque : "),organisateur,new Label("date : "), date,new Label("prix :"),
                    prix_cont,produits ,categories,butt_cont);
            form.revalidate();
        });
        topFilter.add(filtrerShow);
        topFilter.setUIID("");
    }
    
    public void setForm(){    
        form.setTitle("VELOS");
        form.setLayout(new BorderLayout());
        form.setScrollable(false);
        tb = form.getToolbar();
        addToolBar(tb);
        evenements = new Container(BoxLayout.y());
    }
    
    public void setEvents (List<Velo> listEvenements){

        
         Form hi = new Form("ShareButton");
ShareButton sb = new ShareButton();
sb.setText("Share ");




hi.add(sb);

Image screenshot = Image.createImage(hi.getWidth(), hi.getHeight());
hi.revalidate();
hi.setVisible(true);
hi.paintComponent(screenshot.getGraphics(), true);

String imageFile = FileSystemStorage.getInstance().getAppHomePath() + "screenshot.png";
try(OutputStream os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
    ImageIO.getImageIO().save(screenshot, os, ImageIO.FORMAT_PNG, 1);
} catch(IOException err) {
    Log.e(err);
}
sb.setImageToShare(imageFile, "image/png");
        

            
    
        SimpleDateFormat dateF = new SimpleDateFormat("dd/MM/yyyy");
        for (Velo e : listEvenements){
            Container sha = new Container(BoxLayout.x());
            Container eventCont = new Container(new BorderLayout());
            SpanLabel titre = new SpanLabel("Marque  :"+e.getTitre()+"                  ");
            Label editer = new Label("");
            Label espace = new Label("                  ");
            Label supprimer = new Label("");
            Label mail = new Label("");
            editer.addPointerPressedListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent evt) {
                   VarGlobales.setVeloId(e.getId());
                     UpdateVelo updatevelo = new UpdateVelo();
                     updatevelo.getForm().show();
        
                }
            });
            
            mail.addPointerPressedListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent evt) {
                   Message msg = new Message("");
    msg.setAttachment("a propos velo :"+e.getTitre());
   
    Display.getInstance().sendMessage(new String[] {"mahdibensaid100@gmail.com"}, "a propos velo :"+e.getTitre(), msg);
        
                }
            });
            
            supprimer.setIcon(createIcon(FontImage.MATERIAL_DELETE));
            mail.setIcon(createIcon(FontImage.MATERIAL_MAIL));
            
            editer.setIcon(createIcon(FontImage.MATERIAL_SETTINGS));
            SpanLabel date = new SpanLabel("Date: "+dateF.format(e.getDate()));
            Label share = new Label("");
            share.setIcon(createIcon(FontImage.MATERIAL_SHARE));
            if(e.getDisponibilite()==0)
            {
                supprimer.setHidden(true);
                editer.setHidden(true);
            
            }
            
            
            if(e.getDisponibilite()==1)
            {
               mail.setHidden(true);
            
            }
            
            
             sha.add(date);
                         sha.add(espace);

            sha.add(editer);
            sha.add(mail);
                        
                         sha.add(supprimer);
                         sha.add(share);
                        

            Container titreC = new Container(new FlowLayout());
            supprimer.addPointerPressedListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent evt) {
                    if (Dialog.show("Confirm", "supprimer velo"+e.getTitre() , "Yes", "No"))
                   VarGlobales.setVeloId(e.getId());
                    es.deleteEvent(VarGlobales.getVeloId());
        
                }
            });
            titreC.addAll(sha);
            eventCont.add(BorderLayout.NORTH, titreC);
            Button buy=new Button("rent now");
            Button buy2=new Button("buy now");
           buy.addActionListener((ep)->{
                     
              rent(e.getId());
               
                
       
        
        
               
               
            });
            
           share.addPointerPressedListener((ep)->{
                 tb = hi.getToolbar();
        addToolBar(tb);
        
        
             hi.show();
               
                
       
        
        
               
               
            });
           Container Contac = new Container(BoxLayout.y());
           Contac.add(buy);
           Contac.add(buy2);
           
           
                       eventCont.add(BorderLayout.SOUTH, Contac);

            
            
            
            Container eventCenter = new Container(new GridLayout(1, 2));
            String urlImage2 ;    
            if (e.getUrl_image()!=null)
                urlImage2 = urlImage+e.getUrl_image();
           
            else
                urlImage2 = urlImage+"default.png";
            try {
                enc = enc.create("/load.png");
                Image img = URLImage.createToStorage(enc, urlImage2, urlImage2);
                eventCenter.add(img);
            } catch (IOException ex) {
                ex.printStackTrace();
            }
             
            Container bottomC = new Container(BoxLayout.y());
            
            String adresseText ;
            
            
                adresseText = e.getAdresse();
            SpanLabel adresse = new SpanLabel(adresseText);
            SpanLabel adresse1 = new SpanLabel(adresseText);
            adresse.getTextAllStyles().setFont(Font.createSystemFont(Font.FACE_SYSTEM, Font.STYLE_ITALIC, Font.SIZE_SMALL));
            
                                    

            date.getTextAllStyles().setFont(Font.createSystemFont(Font.FACE_SYSTEM, Font.STYLE_ITALIC, Font.SIZE_SMALL));
             date.getTextAllStyles().setFgColor(0xFF0000); 
                                                  titre.getTextAllStyles().setFgColor(0x2C3539); 
                                                  editer.getStyle().setFgColor(0x0000ff); 
                                                  share.getStyle().setFgColor(0x0000ff); 
                                                   supprimer.getStyle().setFgColor(0x0000ff); 
                                                
                                                  

            String categories = "";
            for (Categorie c : e.getListCategories()){
                categories += " # "+c.getName();
            }
            Label Categories_label = new Label("Description: "+e.getDescription());
            double prix = e.getPrix();
            Label prix_label = new Label();
            Label prix_label2 = new Label(); 
            
            
            prix_label.addPointerPressedListener((l)->{
                VarGlobales.setVeloId(e.getId());
                Dialog ip = new InfiniteProgress().showInfiniteBlocking();
                new OneVeloo().getForm().show();
                
            });
          prix_label2.getAllStyles().setFgColor(0x0000ff); 
                prix_label.setText(String.valueOf(e.getPrix())+" DT");
                prix_label2.setText("à proximité  ");
                prix_label2.setIcon(createIcon(FontImage.MATERIAL_MAP));
                Label cat=new Label(e.getLatLng());
                
            bottomC.addAll( adresse,titre, Categories_label ,prix_label,prix_label2,adresse1);
            eventCenter.add(bottomC);
            eventCont.add(BorderLayout.CENTER, eventCenter);
            eventCont.setUIID("event_cont");
            bottomC.setLeadComponent(prix_label);
            
            evenements.add(eventCont);
        }
    }
    
    public Form getForm(){
        return form;
    } 

    
    @Override
    public void itemPurchased(String sku) {
        Display.getInstance().callSerially(()->{
            Purchase iap = Purchase.getInAppPurchase();
            
            // Force us to reload the receipts from the store.
            iap.synchronizeReceiptsSync(0);
            ToastBar.showMessage("Your subscription has been extended to "+iap.getExpiryDate(PRODUCTS), FontImage.MATERIAL_THUMB_UP);
            
        });
        
    }

    @Override
    public void itemPurchaseError(String sku, String errorMessage) {
        Display.getInstance().callSerially(()->{
            ToastBar.showErrorMessage("Failure occurred: "+errorMessage);
        });
        
    }

    @Override
    public void itemRefunded(String sku) {
        
    }

    @Override
    public void subscriptionStarted(String sku) {
        
    }

    @Override
    public void subscriptionCanceled(String sku) {
        
    }

    @Override
    public void paymentFailed(String paymentCode, String failureReason) {
        
    }

    @Override
    public void paymentSucceeded(String paymentCode, double amount, String currency) {
        
    }
    
    
    private Image createIcon(char charcode) {
        int iconWidth = Display.getInstance().convertToPixels(8, true);
        Style iconStyle = new Style();
        Font iconFont = Font.createSystemFont(Font.FACE_SYSTEM, Font.STYLE_BOLD, Font.SIZE_LARGE);
        if (Font.isNativeFontSchemeSupported()) {
            iconFont = Font.createTrueTypeFont("native:MainBold", null).derive((int)(iconWidth * 0.5), Font.STYLE_BOLD);
        }
        iconStyle.setFont(iconFont);
        iconStyle.setFgColor(0x0000ff);
        iconStyle.setBgTransparency(0);

        FontImage completeIcon = FontImage.createMaterial(charcode, iconStyle);
        return completeIcon;
    }

}

