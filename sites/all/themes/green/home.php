							<div class="stretcher"><?php print $mission ?></div>
							<div class="stretcher">
								<form action="<?php print $base_path ?>user/login?destination="  method="post" id="user_login">
									<div>
										<h1 class="title">Log in</h1>
										<div class="form-item">
											<label for="edit-name">Nome utente: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
											<input type="text" maxlength="60" name="edit[name]" id="edit-name"  size="30" value="" tabindex="1" class="form-text required" />
											<div class="description">Inserisci il tuo nome utente Segnala Sito.</div>
										</div>
										<div class="form-item">
											<label for="edit-pass">Password: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
											<input type="password" maxlength="" name="edit[pass]" id="edit-pass"  size="30"  tabindex="2" class="form-text required" />
											<div class="description">Inserisci la password associata al tuo nome utente.</div>
										</div>
										<input type="hidden" name="edit[form_id]" id="edit-user-login" value="user_login"  />
										<input type="submit" name="op" value="Accedi"  tabindex="3" class="form-submit" />
									</div>
								</form>
								<br />
								<a title="Richiedi una nuova password" href="<?php print $base_path ?>user/password">Hai perso la password?</a> </div>
							<div class="stretcher">
								<form action="<?php print $base_path ?>user/register"  method="post" id="user_register">
									<div>
										<h1 class="title">Segnala sito</h1>
										Registrati per segnalare il tuo sito nella directory.
										<div class="form-item">
											<label for="edit-name">Nome utente: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
											<input type="text" maxlength="60" name="edit[name]" id="edit-name"  size="30" value="" class="form-text required" />
											<div class="description">Il tuo nome completo o un nome utente a scelta; è possibile utilizzare soltanto lettere, numeri e spazi.</div>
										</div>
										<div class="form-item">
											<label for="edit-mail">Indirizzo e-mail: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
											<input type="text" maxlength="64" name="edit[mail]" id="edit-mail"  size="30" value="" class="form-text required" />
											<div class="description">Password e istruzioni verranno inviate a questo indirizzo e-mail, quindi accertati che sia corretto.</div>
										</div>
										<input type="hidden" name="edit[form_id]" id="edit-user-register" value="user_register"  />
										<div class="form-item">
										 <label for="edit-profile_name">Nome: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
										
										 <input type="text" maxlength="255" name="edit[profile_name]" id="edit-profile_name"  size="60" value="" class="form-text required" />
										 <div class="description"> Il contenuto di questo campo è privato e non verrà mostrato pubblicamente.</div>
										</div>										
										<div class="form-item">
										 <label for="edit-profile_surname">Cognome: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
										 <input type="text" maxlength="255" name="edit[profile_surname]" id="edit-profile_surname"  size="60" value="" class="form-text required" />
										 <div class="description"> Il contenuto di questo campo è privato e non verrà mostrato pubblicamente.</div>
										
										</div>										
										<div class="form-item">
											<label for="edit-profile_web_site">Sito: <span class="form-required" title="Il campo è obbligatorio.">*</span></label>
											<input type="text" maxlength="255" name="edit[profile_web_site]" id="edit-profile_web_site"  size="60" value="" class="form-text required" />
											<div class="description">Il vostro sito Internet</div>
										</div>
										<input type="checkbox" name="edit[profile_privacy]" id="edit-profile_privacy" value="1"   class="form-checkbox required error" />
										Privacy
										</label>
										<div class="description">Informativa ai sensi del D. Lgs. del 30.06.2003, n. 196 in materia di protezione dei dati personali.</div>
										<input type="submit" name="op" value="Crea nuovo profilo"  class="form-submit" />
									</div>
								</form>
							</div>