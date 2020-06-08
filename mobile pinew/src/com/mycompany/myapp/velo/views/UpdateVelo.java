package com.mycompany.myapp.velo.views;

import com.codename1.capture.Capture;
import com.codename1.components.InfiniteProgress;
import com.codename1.ext.filechooser.FileChooser;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.location.Location;
import com.codename1.location.LocationManager;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.mycompany.myapp.VarGlobales;
import com.mycompany.myapp.velo.entites.Categorie;
import com.mycompany.myapp.velo.entites.Velo;
import com.mycompany.myapp.velo.services.VeloService;
import java.util.Date;
import java.util.List;
import rest.file.uploader.tn.FileUploader;

public class UpdateVelo extends BaseVelo {
    
    //FIXME: ability to delete image

    private Form form;
    private Toolbar tb;
    private TextField titre;
    private TextField adresse;
    private TextField cat;
    private Picker date;
    private TextField description;
    private Button photo;
    private Button valider;
    private String file;
    private VeloService es  ;
    private Velo velo ; 
    String fns;
String imgp;
    
    public UpdateVelo(){
        es = new VeloService();
        velo = es.getEventById(VarGlobales.getVeloId());
        setForm();
    }
    
    private void setForm(){
       
        form = new Form("update velo", BoxLayout.y());
        tb = form.getToolbar();
        addToolBar(tb);
        tb.addMaterialCommandToLeftBar("retour", FontImage.MATERIAL_ARROW_BACK, (l)->{
            new OneVeloo().getForm().show();
        });
        //*************************************************
        titre = new TextField(velo.getTitre(), "marque");
        description=new TextField(velo.getDescription(), "marque");
        adresse = new TextField(String.valueOf(velo.getPrix()), "adresse de l'event");
        date = new Picker();
        date.setDate(velo.getDate());
        cat = new TextField("professionnel","categorie ");
        
        
        description.setRows(2);
        
        photo = new Button(" ajouter image",FontImage.MATERIAL_CAMERA,"photo");
        photo.setUIID("primary_outline_button");
        Label photo_helper = new Label();
        if (velo.getUrl_image() != null)
            photo_helper.setText("image existante");
        photo_helper.addPointerPressedListener((l)->{
            if (photo_helper.getText().equals("image ajouté ")){
                file = null;
                photo_helper.setText(null);
            }
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
                }
                catch (Exception ex){}
          
           
        });
        Location position = LocationManager.getLocationManager().getCurrentLocationSync();
        valider = new Button("valider");
        valider.setUIID("primary_button");
        valider.addActionListener((l)->{
            if (testArgs()){
                velo.setTitre(titre.getText());
                velo.setPrix(Double.valueOf(adresse.getText()));
               velo.setLatLng(cat.getText());
                velo.setDescription(description.getText());
                velo.setAltd(position.getLatitude());
                velo.setBillets_restants(3);
                velo.setLongt(position.getLongitude());
                velo.setUrl_image(file);
                
                if (es.updateEvent(velo)){
                      
                    
                        
                   
                    if (Dialog.show("mis à jour", "mis à jour de avec succés", "ok", null))
                        new VeloView().getForm().show();
                }
            }
        });
        //*******************************************************
        
        Container photo_label = new Container(BoxLayout.x());
        photo_label.addAll(photo, photo_helper);
        form.addAll(new Label("Informations générales :"),titre, adresse ,description,cat);
        setCategories();
        form.addAll(new Label("image  :"),photo_label,valider);
    }
    
        public boolean testArgs(){
        SimpleDateFormat formatter = new SimpleDateFormat("yyyy/MM/dd");    
        if (titre.getText() == null ||titre.getText().isEmpty() || adresse.getText() == null || adresse.getText().isEmpty()   )
        {
            Dialog.show("erreur !", "vous devez remplissez tous les champs obligatoires (titre, adresse, date)", "ok", null);
            return false;
        }
        
        return true;
    }
    
    private void setCategories() {
        Label catTitre = new Label("");
        Container catCon = new Container(BoxLayout.y());
        List<Categorie> listC= es.getCategories();
        for (Categorie c : listC){
            CheckBox check = new CheckBox(c.getName());
            if (velo.getListCategories().contains(c))
                check.setSelected(true);
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
    
    public Form getForm(){
        return form;
    }
}
