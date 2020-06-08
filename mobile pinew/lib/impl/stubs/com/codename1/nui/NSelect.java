package com.codename1.nui;


/**
 *  A heavyweight select widget.  On supported platforms (currently Javascript and JavaSE), this will use the platform's
 *  native select widget.  On JavaSE this is a JComboBox.  On Javascript this is an HTML select widget.  This is 
 *  primarily directed at the Javascript port since the Picker and ComboBox have 
 *  some <a href="https://github.com/codenameone/CodenameOne/issues/2529">issues</a>.
 *  @author shannah
 */
public class NSelect extends com.codename1.ui.Container {

	/**
	 *  Creates a new NSelect.
	 */
	public NSelect() {
	}

	/**
	 *  Sets the NSelect class to only use lightweight internal widgets even if 
	 *  the platform supports native widgets.  Mostly for debugging purposes.
	 *  @param lw True to set to only use lightweight widgets.  False to allow supported platforms to use native widgets.
	 */
	public static void setUseLightWeightWidget(boolean lw) {
	}

	/**
	 *  This is overridden to propagate style changes from the NSelect
	 *  to its internal peer component.  Only {@link Style#FG_COLOR}, {@link Style#BG_COLOR}, and {@link Style#FONT}
	 *  will have any effect.
	 *  @param propertyName
	 *  @param source 
	 */
	@java.lang.Override
	public void styleChanged(String propertyName, com.codename1.ui.plaf.Style source) {
	}

	@java.lang.Override
	public void setWidth(int width) {
	}

	@java.lang.Override
	public void setHeight(int height) {
	}

	/**
	 *  Sets the options in this select.
	 *  @param options 
	 */
	public void setOptions(Object[] options) {
	}

	/**
	 *  Gets the selected index.
	 *  @return 
	 */
	public int getSelectedIndex() {
	}

	/**
	 *  Sets the selected index.
	 *  @param index 
	 */
	public void setSelectedIndex(int index) {
	}

	/**
	 *  Gets the selected item.
	 *  @return 
	 */
	public Object getSelectedItem() {
	}

	/**
	 *  Gets the option at the given index.
	 *  @param index
	 *  @return 
	 */
	public Object getOption(int index) {
	}

	/**
	 *  Gets the number of options.
	 *  @return 
	 */
	public int getOptionCount() {
	}

	/**
	 *  Adds a selection listener to be notified when the selected value changes.
	 *  @param l 
	 */
	public void addSelectionListener(com.codename1.ui.events.SelectionListener l) {
	}

	/**
	 *  Removes a selection listener.
	 *  @param l 
	 */
	public void removeSelectionListener(com.codename1.ui.events.SelectionListener l) {
	}

	/**
	 *  For internal use only for native callbacks.
	 *  @param index 
	 *  @deprecated For internal use only.
	 */
	public static void fireSelectionChanged(int index) {
	}

	@java.lang.Override
	protected void initComponent() {
	}

	@java.lang.Override
	protected void deinitialize() {
	}
}
