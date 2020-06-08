


package com.mycompany.myapp.velo.services;


import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkManager;
import com.mycompany.myapp.velo.entites.Velo;
import com.codename1.io.CharArrayReader;
import com.codename1.io.MultipartRequest;
import com.mycompany.myapp.Utilisateur;

import com.mycompany.myapp.VarGlobales;
import com.mycompany.myapp.velo.entites.Categorie;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.io.IOException;


public class VeloService {

    private ConnectionRequest con;
    private String path;
    
    public VeloService(){
        con = new ConnectionRequest();
        path = VarGlobales.path;
    }
    
    
   public int addEvent(Velo velo){
       
       
       
       
       
       

       
       
       
       
       
       
       
       
       
       
        ConnectionRequest conF = new ConnectionRequest();
        List<String> idCat = new ArrayList<>();
        conF.setUrl("http://localhost/symfony-api/web/app_dev.php/api/tasks/new");
        conF.setPost(true);
        conF.addArgument("marque", velo.getTitre());
        conF.addArgument("pathPhoto", velo.getUrl_image());
        conF.addArgument("altd",String.valueOf(velo.getAltd()));
        conF.addArgument("longt",String.valueOf(velo.getLongt()));
        conF.addArgument("categorie","professionnel");
      
                conF.addArgument("username",VarGlobales.getusername());
                conF.addArgument("verif","1");
           
            conF.addArgument("description", velo.getDescription());
       
        conF.addArgument("prix",String.valueOf( velo.getPrix()));
        conF.addArgument("nombre",String.valueOf(velo.getBillets_restants()));
        
            
        NetworkManager.getInstance().addToQueueAndWait(conF);
        return 1;
    }
    
    
    public boolean deleteImage(Velo velo) {
              return true;
    }
    
    
    
    
    public Velo getEventById(int id){
Velo velo ;
        con.setUrl("http://localhost/symfony-api/web/app_dev.php/api/tasks/all");
        NetworkManager.getInstance().addToQueueAndWait(con);
        String data = new String(con.getResponseData());
        velo = parseOneElement(data);
        return velo;
    }
    
    public List<Velo> getEvents(){
                Velo velo ;
this.verif(VarGlobales.getusername());
     con.setUrl("http://localhost/symfony-api/web/app_dev.php/api/tasks/all");
        NetworkManager.getInstance().addToQueueAndWait(con);
        String data = new String(con.getResponseData());
        List<Velo> events = parseElements(data);
         

        return events;
     
    
    }
    
    
    
      
    
    public List<Categorie> getCategories(){
       List<Categorie> events = new ArrayList();
     
     return events;
    }
    
    
    
    
    private  List<Velo> parseElements(String data){
      List<Velo> events = new ArrayList();
     JSONParser j = new JSONParser();
        try {
            List<Map> items = (List)j.parseJSON(new CharArrayReader(data.toCharArray())).get("root");
            for (Map element : items){
                Velo e = new Velo();
                e.setTitre((String)element.get("marque").toString());
               
                 e.setDescription((String)element.get("description").toString());
                e.setId((int)Float.parseFloat(element.get("id").toString()));
                e.setLatLng((String)element.get("categorie").toString());
                e.setUrl_image(element.get("pathPhoto").toString());
                e.setDisponibilite((int)Float.parseFloat(element.get("verif").toString()));
                e.setusername(element.get("username").toString());
                System.out.println((String)element.get("pathPhoto"));
               
                    e.setPrix((double)Float.parseFloat(element.get("prix").toString()));
                
                
                events.add(e);
            }
        } catch (IOException ex) {
            
        }
     
     return events;
    }

    private Velo parseOneElement(String data) {
        Velo e = new Velo();
        JSONParser j = new JSONParser();
        try {
            List<Map> items = (List)j.parseJSON(new CharArrayReader(data.toCharArray())).get("root");
            for (Map element : items){
                if(VarGlobales.getVeloId()==(int)Math.round((double)element.get("id"))){
                e.setTitre((String)element.get("marque"));
               
                 e.setDescription((String)element.get("description"));
                e.setId((int)Math.round((double)element.get("id")));
                e.setUrl_image((String)element.get("pathPhoto"));
                System.out.println((String)element.get("pathPhoto"));
               
                    e.setPrix((double)element.get("prix"));
           
                }
            }
           
            
            
            
        } catch (IOException ex) {
           
        }
        return e;        
    }
    
    
    
    
    
public boolean updateEvent(Velo velo){
    
        ConnectionRequest conF = new ConnectionRequest();
        List<String> idCat = new ArrayList<>();
        conF.setUrl("http://localhost/symfony-api/web/app_dev.php/api/tasks/update/"+VarGlobales.getVeloId());
        conF.setPost(true);
        conF.addArgument("marque", velo.getTitre());
        conF.addArgument("pathPhoto", velo.getUrl_image());
        conF.addArgument("altd",String.valueOf(velo.getAltd()));
        conF.addArgument("longt",String.valueOf(velo.getLongt()));
        conF.addArgument("categorie","professionnel");
           
            conF.addArgument("description", velo.getDescription());
       
        conF.addArgument("prix",String.valueOf( velo.getPrix()));
        conF.addArgument("nombre",String.valueOf(velo.getBillets_restants()));
        NetworkManager.getInstance().addToQueueAndWait(conF);
        return   true ;  
    }


public boolean deleteEvent(int id){
        ConnectionRequest conF = new ConnectionRequest();
        List<String> idCat = new ArrayList<>();
        conF.setUrl("http://localhost/symfony-api/web/app_dev.php/api/tasks/delate/"+id);
        conF.setPost(true);
       
        NetworkManager.getInstance().addToQueueAndWait(conF);
        return new String (conF.getResponseData()).equals("yes") ?  true : false;  
    }

public boolean verif(String name){
        ConnectionRequest conF = new ConnectionRequest();
        List<String> idCat = new ArrayList<>();
        conF.setUrl("http://localhost/symfony-api/web/app_dev.php/api/tasks/verif/"+name);
        conF.setPost(true);
       
        NetworkManager.getInstance().addToQueueAndWait(conF);
        return new String (conF.getResponseData()).equals("yes") ?  true : false;  
    }



    public String uploadImage(String file, int id) {
         MultipartRequest cr = new MultipartRequest();
                
        cr.setUrl("http://localhost/mobile/");
        cr.setPost(true);
        String mime="image/jpeg";
        try {
            cr.addData("file", file, "image/jpeg");
        } catch (IOException ex) {
            
        }
        cr.setFilename("file", "MyImage.jpg");
        NetworkManager.getInstance().addToQueueAndWait(cr);
        return new String(cr.getResponseData());
    }

    private List<Categorie> parseCategories(String data) {
        List<Categorie> categories = new ArrayList<>();
        JSONParser j = new JSONParser();
        try {
            List<Map> items = (List)j.parseJSON(new CharArrayReader(data.toCharArray())).get("root");
            for (Map<String,Object> map : items){
                Categorie c = new Categorie((int)((double)map.get("id")), (String)map.get("nom"));
                categories.add(c);
            }
        } catch (IOException ex) {
            
        }
        return categories;
       
    }
}
