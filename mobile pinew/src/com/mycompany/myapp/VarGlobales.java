package com.mycompany.myapp;

import com.codename1.ui.util.Resources;

public class VarGlobales {
    
    private static Utilisateur utilisateur = null;
    private static int veloid;
      private static String username;
    private static Resources theme;
    public static String  path = "http://localhost/";
    
    public static Utilisateur getUtilisateur(){
        return utilisateur;
    }
    
    public static void setUtilisateur(Utilisateur utilisateur){
        VarGlobales.utilisateur = utilisateur;
    }
    
     public static int getVeloId(){
        return veloid;
    }
     public static String getusername(){
        return username;
    }
     public static void setusername(String u){
          username=u;
    }
     
    public static void setVeloId(int id){
        veloid = id;
    }; 
    
    public static void setTheme(Resources theme){
        VarGlobales.theme= theme;
    }
    
    public static Resources getTheme(){
        return theme;
    }
}
