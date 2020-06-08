package com.codename1.fingerprint.impl;


/**
 *  @deprecated internal implementation detail please use {@code Fingerprint}
 */
public interface InternalFingerprint extends com.codename1.system.NativeInterface {

	public boolean isAvailable();

	public void scan(String reason);
}
