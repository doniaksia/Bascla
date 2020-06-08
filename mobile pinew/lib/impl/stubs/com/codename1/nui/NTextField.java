package com.codename1.nui;


/**
 *  A native text field widget that can be used, more or less, like a regular text field.  
 *  The benefit of a native text field is that it supports native password managers.  Therefore
 *  the primary use-case for NTextField is for username and password fields on login forms.
 *  @author shannah
 */
public class NTextField extends com.codename1.ui.Container {

	public static final int CODE_DONE = 1;

	public static final int CODE_NEXT = 2;

	/**
	 *  Creates a new text field.
	 *  @param constraint Constraint.  Same valeus as {@TextArea#setConstraint(int)}.
	 */
	public NTextField(int constraint) {
	}

	@java.lang.Override
	public void styleChanged(String propertyName, com.codename1.ui.plaf.Style source) {
	}

	/**
	 *  @deprecated For internal use only
	 *  @param index
	 *  @return 
	 */
	public static int getFgColor(int index) {
	}

	/**
	 *  @deprecated For internal use only
	 *  @param index
	 *  @return 
	 */
	public static int getBgColor(int index) {
	}

	/**
	 *  @deprecated For internal use only
	 *  @param index
	 *  @return 
	 */
	public static NTextField getInstance(int index) {
	}

	/**
	 *  @deprecated For internal use only
	 *  @param index
	 *  @return 
	 */
	public static Object getNativeFont(int index) {
	}

	/**
	 *  @deprecated For internal use only
	 *  @param index
	 *  @return 
	 */
	public static int getTextAlign(int index) {
	}

	public com.codename1.ui.Component getInternal() {
	}

	/**
	 *  Sets the text in this text field.
	 *  @param text 
	 */
	public void setText(String text) {
	}

	/**
	 *  Gets the text in this field.
	 *  @return 
	 */
	public String getText() {
	}

	/**
	 *  Adds action listener to be notified when editing ends.
	 *  @param l 
	 */
	public void addActionListener(com.codename1.ui.events.ActionListener l) {
	}

	/**
	 *  Removes actionlistener.
	 *  @param l 
	 */
	public void removeActionListener(com.codename1.ui.events.ActionListener l) {
	}

	/**
	 *  Adds listener to be notified if Done is pressed.
	 *  @param l 
	 */
	public void addDoneListener(com.codename1.ui.events.ActionListener l) {
	}

	/**
	 *  Removes Done listener.
	 *  @param l 
	 */
	public void removeDoneListener(com.codename1.ui.events.ActionListener l) {
	}

	/**
	 *  Adds listener to be notified whenever contents of field change.  This is different than
	 *  an action event because action events are only fired in response to user action.  This event
	 *  will fire even when text is changed programmatically.
	 *  @param l 
	 */
	public void addChangeListener(com.codename1.ui.events.ActionListener l) {
	}

	/**
	 *  Removes a change listener.
	 *  @param l 
	 */
	public void removeChangeListener(com.codename1.ui.events.ActionListener l) {
	}

	/**
	 *  @deprecated For internal use only.
	 *  @param index 
	 */
	public static void requestFocus(int index) {
	}

	/**
	 *  @deprecated For internal use only.
	 *  @param idx
	 *  @return 
	 */
	public static boolean isLastEdit(int idx) {
	}

	/**
	 *  This is a notification method called from native code to indicate that 
	 *  editing has ended.
	 *  @deprecated For internal use only
	 *  @param index
	 *  @param code Either CODE_NEXT = The next button was pressed, or CODE_DONE = the done button was pressed.
	 */
	public static void endEditing(int index, int code) {
	}

	/**
	 *  @deprecated for internal use
	 *  @param index 
	 */
	public static void fireActionEvent(int index) {
	}

	/**
	 *  @deprecated For internal use
	 *  @param index 
	 */
	public static void fireChangeEvent(int index) {
	}

	@java.lang.Override
	protected void initComponent() {
	}

	@java.lang.Override
	protected void deinitialize() {
	}

	public void registerAsInputDevice() {
	}
}
