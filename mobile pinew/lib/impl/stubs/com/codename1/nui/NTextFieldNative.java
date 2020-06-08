package com.codename1.nui;


/**
 * 
 *  @author shannah
 */
public interface NTextFieldNative extends com.codename1.system.NativeInterface {

	public com.codename1.ui.PeerComponent createNativeTextField(int index, int constraint);

	public void setText(String text);

	public String getText();

	public void focus();

	public void blur();

	public void updateStyle();

	public int getKeyboardHeight();

	public void startEditingAsync();

	public boolean isEditing();

	public void stopEditing();
}
