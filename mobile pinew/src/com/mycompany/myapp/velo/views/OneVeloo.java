package com.mycompany.myapp.velo.views;

import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;

import com.codename1.googlemaps.MapContainer;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.location.Location;
import com.codename1.location.LocationManager;
import com.codename1.maps.Coord;
import com.codename1.ui.Button;
import static com.codename1.ui.CN.CENTER;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.mycompany.myapp.VarGlobales;
import com.mycompany.myapp.velo.entites.Categorie;
import com.mycompany.myapp.velo.entites.Velo;
import com.mycompany.myapp.velo.entites.Inscription;
import com.mycompany.myapp.velo.services.VeloService;
import java.io.IOException;

public class OneVeloo extends BaseVelo{
    
    //FIXME: delete button 
    //NOTE: size of map

    private Form  form ;
    private Toolbar tb;
    private VeloService es ;
    private Velo velo;
    private EncodedImage enc ;
    private final String urlI = "";
    
    public OneVeloo(){
        es = new VeloService();
        velo = es.getEventById(VarGlobales.getVeloId());
       
        
        
        
        setMap();
        setForm();
    }
    
    public void setForm(){
        form = new Form("approximation", BoxLayout.y());
        
     
       
        
        
         Form hi = new Form("velo  : "+velo.getTitre()+" PRIX :"+velo.getPrix());
        hi.setLayout(new BorderLayout());
        Location position = LocationManager.getLocationManager().getCurrentLocationSync();
        
        final MapContainer cnt = new MapContainer("AIzaSyBY_BIwcJipSgS7CUFpEe7N77Iwu1LXG9c");
        System.out.println(velo.getLongt());
        System.out.println(velo.getAltd());
        
       cnt.setCameraPosition(new Coord(position.getLatitude(), position.getLongitude()));
    
       

        
        Style s = new Style();
        s.setFgColor(0xff0000);
        s.setBgTransparency(0);
        FontImage markerImg = FontImage.createMaterial(FontImage.MATERIAL_PLACE, s, Display.getInstance().convertToPixels(1));
    // cnt.setCameraPosition(new Coord(9.537499, 33.866537));   
cnt.addMarker(
                    EncodedImage.createFromImage(markerImg, false),
                    cnt.getCameraPosition(),
                    "Hi marker",
                    "Optional long description",
                     evt -> {
                             ToastBar.showMessage("You clicked the marker", FontImage.MATERIAL_PLACE);
                     }
            );
        /*Button btnAddMarker = new Button("Add Marker");
        btnAddMarker.addActionListener(e->{

            cnt.setCameraPosition(new Coord(41.889, -87.622));
            cnt.addMarker(
                    EncodedImage.createFromImage(markerImg, false),
                    cnt.getCameraPosition(),
                    "Hi marker",
                    "Optional long description",
                     evt -> {
                             ToastBar.showMessage("You clicked the marker", FontImage.MATERIAL_PLACE);
                     }
            );

        });

        Button btnAddPath = new Button("Add Path");
        btnAddPath.addActionListener(e->{

            cnt.addPath(
                    cnt.getCameraPosition(),
                    new Coord(-33.866, 151.195), // Sydney
                    new Coord(-18.142, 178.431),  // Fiji
                    new Coord(21.291, -157.821),  // Hawaii
                    new Coord(37.423, -122.091)  // Mountain View
            );
        });

        Button btnClearAll = new Button("Clear All");
        btnClearAll.addActionListener(e->{
            cnt.clearMapLayers();
        });

        cnt.addTapListener(e->{
            TextField enterName = new TextField();
            Container wrapper = BoxLayout.encloseY(new Label("Name:"), enterName);
            InteractionDialog dlg = new InteractionDialog("Add Marker");
            dlg.getContentPane().add(wrapper);
            enterName.setDoneListener(e2->{
                String txt = enterName.getText();
                cnt.addMarker(
                        EncodedImage.createFromImage(markerImg, false),
                        cnt.getCoordAtPosition(e.getX(), e.getY()),
                        enterName.getText(),
                        "",
                        e3->{
                                ToastBar.showMessage("You clicked "+txt, FontImage.MATERIAL_PLACE);
                        }
                );
                dlg.dispose();
            });
            dlg.showPopupDialog(new Rectangle(e.getX(), e.getY(), 10, 10));
            enterName.startEditingAsync();
        });*/

        Container root = LayeredLayout.encloseIn(
                BorderLayout.center(cnt),
                BorderLayout.south(
                        FlowLayout.encloseBottom()
                )
        );

        hi.add(BorderLayout.CENTER, root);
        
        
        
        hi.getAllStyles().setBgColor(0xf4f9f4);
        hi.getAllStyles().setOpacity(255);
        tb = hi.getToolbar();
        addToolBar(tb);
        tb.addMaterialCommandToLeftBar("retour", FontImage.MATERIAL_ARROW_BACK, (e)->{
            VeloView ev = new VeloView();
            ev.getForm().show();
        });
        
       form.add(hi);
    }
    
    public Form getForm(){
        
        return form;
    }

    private void setEvent() {
       
        Container top = new Container(BoxLayout.y());
        Container vtop = new Container(new FlowLayout(CENTER));
        SpanLabel titre = new SpanLabel(velo.getTitre().toUpperCase());
        titre.getTextAllStyles().setFgColor(0x0e1b4d);
        ImageViewer iv = new ImageViewer();
        iv.setWidth(Display.getInstance().getDisplayWidth());
        String urlImage ;
        if (velo.getUrl_image()!= null)
            urlImage = urlI+velo.getUrl_image();
        else 
            urlImage = urlI+"default.png";
        try {
            enc = enc.create("/placeholder9.jpg");
            Image image = URLImage.createToStorage(enc, urlImage, urlImage, URLImage.RESIZE_SCALE_TO_FILL); 
            iv.setImage(image);
            
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        vtop.addAll(titre);
        top.addAll(iv,vtop);
        //*****************************************************************
        SimpleDateFormat dateFormater = new SimpleDateFormat("dd/MM/yyyy");
        Container middle = new Container(BoxLayout.y());
        Label titre_middle = new Label("Informations génerales :");
        FontImage.setMaterialIcon(titre_middle, FontImage.MATERIAL_INFO);
        titre_middle.setUIID("event_titre");
        
        Container userCon = new Container(BoxLayout.x());
      
        
        Label utilisateur_lab = new Label("créée par: ");
        FontImage.setMaterialIcon(utilisateur_lab, FontImage.MATERIAL_PERSON);
        //utilisateur_lab.setW(300);
       

        Container adresseCon = new Container(BoxLayout.x());
        Label adresse = new Label(velo.getAdresse());
        adresse.setUIID("event_label");
        Label adresse_lab = new Label("Adresse: ");
        FontImage.setMaterialIcon(adresse_lab, FontImage.MATERIAL_PLACE);
        //adresse_lab.setWidth(300);
        adresseCon.addAll(adresse_lab, adresse);
        
        Container dateCon = new Container(BoxLayout.x());
        Label date = new Label(dateFormater.format(velo.getDate()));
        date.setUIID("event_label");
        Label date_lab = new Label("Date : ");
        FontImage.setMaterialIcon(date_lab, FontImage.MATERIAL_ACCESS_TIME);
        //date_lab.setWidth(300);
        dateCon.addAll(date_lab, date);

        Container prixCon = new Container(BoxLayout.x());
        Label prix = new Label(velo.getPrix()+" $");
        prix.setUIID("event_label");
        Label prix_lab = new Label("prix : ");
        FontImage.setMaterialIcon(prix_lab, FontImage.MATERIAL_CREDIT_CARD);
        //prix_lab.setWidth(300);
        prixCon.addAll(prix_lab, prix);
                
        Container billetsCon = new Container(BoxLayout.x());
        Label billets = new Label(velo.getBillets_restants()+" billets");
        billets.setUIID("event_label");
        Label billets_lab = new Label("Billets : ");
        FontImage.setMaterialIcon(billets_lab, FontImage.MATERIAL_BOOK);
        //billets_lab(300);
        billetsCon.addAll(billets_lab, billets);
        
        
        
        
        Container categoriesCont = new Container(BoxLayout.x());
       
        
        Label tag_lab = new Label("tags: ");
        FontImage.setMaterialIcon(tag_lab, FontImage.MATERIAL_LOCAL_OFFER);
        //tag_lab.setWidth(300);
                 
        middle.addAll(titre_middle, userCon, adresseCon, dateCon, prixCon, billetsCon, categoriesCont);
        middle.setSameWidth(date_lab,adresse_lab,utilisateur_lab,prix_lab,billets_lab,tag_lab);
        //************************************************************************
        Container bottom = new Container(BoxLayout.y());
        Label description_Titre = new Label("Description  :");
        description_Titre.setUIID("event_titre");
        Container descriptionBox = new Container();
       
       
            descriptionBox.setLayout(new FlowLayout());
            descriptionBox.add(new SpanLabel(velo.getDescription()));            
        
        bottom.addAll(description_Titre,descriptionBox);
        //************************************************************************
        form.addAll(top, middle,bottom); 
    }

    
    
    private void setMap(){
       
    }
}