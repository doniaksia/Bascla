package com.mycompany.myapp;

import com.codename1.components.InfiniteProgress;

import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;

import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;

import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.mycompany.myapp.velo.views.BaseVelo;
import com.mycompany.myapp.velo.views.VeloView;


 
public class Loggin extends BaseVelo{
 
    //FIXME: text inputs colors
    
    private Form form;
    
    public Loggin() {
        
        
        
        form = new Form("Loggin", new BorderLayout());
        form.setUIID("Loggin");
        form.add(BorderLayout.NORTH, new Label(VarGlobales.getTheme().getImage("Logo.png"), "LogoLabel"));
        
        TextField username = new TextField(null, "username");
        username.setConstraint(TextField.USERNAME);
        TextField password = new TextField(null, "Password");
        password.setConstraint(TextField.PASSWORD);
        username.setSingleLineTextArea(false);
        password.setSingleLineTextArea(false);
        Button signIn = new Button("Sign In");
        Button signUp = new Button("Sign Up");
        signUp.addActionListener((l)->{
            
        
        });
        signUp.setUIID("Link");
        Label doneHaveAnAccount = new Label(" ");
        
        Container content = BoxLayout.encloseY(
                username,
                password,
                signIn,
                FlowLayout.encloseCenter(doneHaveAnAccount, signUp)
        );
        content.setScrollableY(true);
        
        
        form.add(BorderLayout.SOUTH, content);
        signIn.requestFocus();
        signIn.addActionListener(e -> {
            if (username.getText() == null ||  username.getText().isEmpty() || password.getText() == null || password.getText().isEmpty()){
                Dialog.show("loggin", "veuillez remplir tous les champs ", "ok", null);
            }
            else {
                loggin(username.getText().trim(), password.getText().trim());
            }
        });
    }
    
    public Form getForm(){
        return form;
    }

    private void loggin(String username, String password) {
        Dialog ip = new InfiniteProgress().showInfiniteBlocking();
        VarGlobales.setusername(username);
                new VeloView().getForm().show();
           
    }
    
}
