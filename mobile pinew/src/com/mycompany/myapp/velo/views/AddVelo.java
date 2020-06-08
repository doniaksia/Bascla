package com.mycompany.myapp.velo.views;

import com.codename1.capture.Capture;
import com.codename1.components.ToastBar;
import com.codename1.ext.filechooser.FileChooser;
import com.codename1.io.Util;

import com.codename1.location.Location;
import com.codename1.location.LocationManager;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import static com.codename1.ui.TextArea.DECIMAL;
import static com.codename1.ui.TextArea.NUMERIC;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.mycompany.myapp.VarGlobales;
import com.mycompany.myapp.velo.entites.Categorie;
import com.mycompany.myapp.velo.entites.Velo;
import com.mycompany.myapp.velo.services.VeloService;

import java.util.List;
import java.util.Random;
import rest.file.uploader.tn.FileUploader;

public class AddVelo extends BaseVelo{
    
    //FIXME: date avant now()
    
    //TODO: supprimer image
    
    private Form form;
    private Toolbar tb;
    private TextField titre;
String fns;
String imgp;
   
    private TextField prix;
    private TextField billetsRestants;
    private TextField description;
    private Button photo;
    private Button cam;
    
    private Button valider;
    private String file;
    private VeloService es  ;
    private Velo velo ; 
    
    public AddVelo(){
        velo = new Velo();
        setForm();
    }
    
    public void setForm(){
        form = new Form("ajouter votre velo", BoxLayout.y());
        tb = form.getToolbar();
        es = new VeloService();
        addToolBar(tb);
        //********************************************************
        titre = new TextField(null, "Marque");
        
      
        description = new TextField(null,"description ");
        description.setRows(2);
        prix = new TextField(null, "prix");
        prix.setConstraint(DECIMAL);
        billetsRestants = new TextField(null, "nombre");
        billetsRestants.setConstraint(NUMERIC);
        photo = new Button(" ajouter image",FontImage.MATERIAL_CAMERA,"photo");
        
        
        
        
        Image icon = FontImage.createMaterial(FontImage.MATERIAL_CAMERA_ALT, UIManager.getInstance().getComponentStyle("Label"));
         cam = new Button(icon);
        
        //add an ActionListener to the cam Button
        cam.addActionListener(new ActionListener() {

            public void actionPerformed(ActionEvent evt) {
                
                //This will trigger the native camera to display
                Capture.capturePhoto(new ActionListener() {

                    public void actionPerformed(final ActionEvent evt) {
                        //if a user cancels the camera the evt will be null
                        if (evt == null) {
                            ToastBar.Status s = ToastBar.getInstance().createStatus();
                            s.setMessage("User Cancelled Camera");
                            s.setMessageUIID("Title");
                            Image i = FontImage.createMaterial(FontImage.MATERIAL_ERROR, UIManager.getInstance().getComponentStyle("Title"));
                            s.setIcon(i);
                            s.setExpires(2000);
                            s.show();
                            return;
                        }
                        //Create a component to display from the image path
                       

                    }
                });

            }
        });
        
        
        
        
        
        
        
        photo.setUIID("primary_outline_button");
        Label photo_helper = new Label();
        
        photo_helper.addPointerPressedListener((l)->{
            file = null;
            photo_helper.setText(null);
        });
        
        photo.addActionListener((event)->{
            imgp = Capture.capturePhoto();
String l = imgp.toString();
int p = l.indexOf("/",2);
String n = l.substring(p+2 , l.length());
FileUploader f = new FileUploader("http://localhost/mobile/images/");
            
                try {
                    
                    fns = f.upload(n);
                    
                    
                    file = fns;
                   
                    if (file != null){
                        
                        
                         ToastBar.Status status = ToastBar.getInstance().createStatus();
            status.setMessage("Working on Task with Progress");
            status.setProgress(0);
            status.setIcon(createIcon(FontImage.MATERIAL_BACKUP));
            status.show();
            
            for (int progress=0; progress <= 100; progress += 20) {
                Display.getInstance().invokeAndBlock(()->{Util.sleep(500);});
                status.setProgress(progress);
                status.show();
                if (progress == 100) {
                    status.setIcon(createIcon(FontImage.MATERIAL_DONE));
                    status.setProgress(-1);
                    status.setExpires(3000);
                    status.setMessage("image ajouté");
                    status.show();
                }
            }
                        
                        
                        photo_helper.setText("image ajouté ");
                    }
                    else{ 
                        photo_helper.setText(null);
                    }
                      
                }
                catch (Exception ex){}
           
            //file = Capture.capturePhoto();
        });
         Location position = LocationManager.getLocationManager().getCurrentLocationSync();
        valider = new Button("valider");
        valider.setUIID("primary_button");
        valider.addActionListener((event)->{
            
            
            
            
            
            if (testArgs() && Dialog.show("Confirm", "vous voulez partager votre localisation", "Yes", "No")){
                
                
                velo.setAltd(position.getLatitude());
                velo.setLongt(position.getLongitude());
                velo.setTitre(titre.getText());
                
                velo.setDescription(description.getText());
                if (!prix.getText().isEmpty())
                    velo.setPrix(Double.parseDouble(prix.getText()));
                
                
                velo.setUtilisateur(VarGlobales.getUtilisateur());
                velo.setUrl_image(file);
                //******************************************************************
               
                int eventId = es.addEvent(velo);
                if (eventId != 0){
                    
                   ToastBar.Status status = ToastBar.getInstance().createStatus();
            status.setMessage("succes");
            status.setShowProgressIndicator(true);
            status.setIcon(createIcon(FontImage.MATERIAL_ADD_BOX));
            status.show();
                        
                }
                
            }
        });
        //********************************************************
        Container prix_billets = new Container(new GridLayout(1, 2));
        Container photo_label = new Container(BoxLayout.x());
        prix_billets.addAll(prix, billetsRestants);
        photo_label.addAll(photo, photo_helper);
        form.addAll(new Label("Informations générales :"),titre ,description, prix_billets);
        
        
        form.addAll(new Label("image:"),photo_label,cam,valider);
       
    }
    
    public Form getForm(){
        return form;
    } 
    
    public boolean testArgs(){
        
        
        
        
        
        
        
        
        
        
      
        
        ToastBar.Status status = ToastBar.getInstance().createStatus();
            status.setMessage("chargement...");
            status.setShowProgressIndicator(true);
            status.setIcon(createIcon(FontImage.MATERIAL_WORK));
            status.show();
            // Now do something that takes a while
            Display.getInstance().invokeAndBlock(()->{
                Util.sleep(2000);
            });
             
            // Let's pretend that en error occurs half the time
            Random r = new Random();

          
            
        
        
        
        
        if (titre.getText() == null ||titre.getText().isEmpty()   )
        {
            
             // There was an error
                status.setShowProgressIndicator(false);
                status.setMessage( "vous devez remplissez tous les champs obligatoires (marque, des)");
                status.setIcon(createIcon(FontImage.MATERIAL_ERROR));
                status.show();
                // show this error message for 3 seconds, then hide automatically
                status.setExpires(10000);
            
            
            
            
            
          
            return false;
        }
        
        if (!prix.getText().isEmpty()){
            try {
                double prix_test = Double.parseDouble(prix.getText());
            }
            catch (Exception e){
                Dialog.show("erreur !", "prix invalide ", "ok", null);
                return false;
            }
            if (Double.parseDouble(prix.getText())<0){
                Dialog.show("erreur !", "prix ne doit pas etre inferieur à 0 ", "ok", null);
                return false;    
            }
        }
        if (!billetsRestants.getText().isEmpty()){
            try {
                Integer.parseInt(billetsRestants.getText());
            }
            catch (Exception e){
                Dialog.show("erreur !", "nombre de place invalide ", "ok", null);
                return false;
            }
            if (Integer.parseInt(billetsRestants.getText())<0){
                Dialog.show("erreur !", "nombre ne doit pas etre inferieur à 0 ", "ok", null);
                return false;    
            }
        }
        
        else {
                // If the task succeeded, the user doesn't need to see anything
                // so we just hide the message
                status.clear();
            }
        return true;
    }
    
     private Image createIcon(char charcode) {
        int iconWidth = Display.getInstance().convertToPixels(8, true);
        Style iconStyle = new Style();
        Font iconFont = Font.createSystemFont(Font.FACE_SYSTEM, Font.STYLE_BOLD, Font.SIZE_LARGE);
        if (Font.isNativeFontSchemeSupported()) {
            iconFont = Font.createTrueTypeFont("native:MainBold", null).derive((int)(iconWidth * 0.5), Font.STYLE_BOLD);
        }
        iconStyle.setFont(iconFont);
        iconStyle.setFgColor(0xffffff);
        iconStyle.setBgTransparency(0);

        FontImage completeIcon = FontImage.createMaterial(charcode, iconStyle);
        return completeIcon;
    }

    private void setCategories() {
        Label catTitre = new Label("categories :");
        Container catCon = new Container(BoxLayout.y());
        List<Categorie> listC= es.getCategories();
        for (Categorie c : listC){
            CheckBox check = new CheckBox(c.getName());
            check.addActionListener((e)->{
                if (check.isSelected())
                    velo.addCategorie(c);
                else 
                    velo.removeCategorie(c);
            });
            catCon.add(check);
        }
        form.addAll(catTitre,catCon);
    }
}
