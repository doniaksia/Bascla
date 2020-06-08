package com.codename1.nui;


/**
 * 
 *  @author shannah
 */
public interface NSelectNative extends com.codename1.system.NativeInterface {

	public com.codename1.ui.PeerComponent createNativeSelect(int index);

	public void setOptions(String options);

	public int getSelectedIndex();

	public void setSelectedIndex(int index);
}
