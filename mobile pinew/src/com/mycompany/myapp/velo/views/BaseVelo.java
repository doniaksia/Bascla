package com.mycompany.myapp.velo.views;

import com.codename1.components.InfiniteProgress;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Toolbar;
import com.mycompany.myapp.Loggin;

public class BaseVelo {
    
    private Form form;
    
    public void addToolBar(Toolbar tb){
        tb.addMaterialCommandToOverflowMenu("velos liste", FontImage.MATERIAL_HOME, (e)->{
            Dialog ip = new InfiniteProgress().showInfiniteBlocking();
            VeloView ev = new VeloView(); 
            ev.getForm().show();
        });
        
        tb.addMaterialCommandToOverflowMenu("ajouter votre velo", FontImage.MATERIAL_ADD_BOX, (e)->{
            Dialog ip = new InfiniteProgress().showInfiniteBlocking();
            AddVelo addEvent = new AddVelo();
            addEvent.getForm().show();
        });
        tb.addMaterialCommandToOverflowMenu("deconnexion", FontImage.MATERIAL_LOCK, (e)->{
            new Loggin().getForm().show();
        });
    }
    
}
