<?php /* rubric.php - codice della rubrica copiato da main071.php (gli originali restano in main071.php) */ ?>
<!-- ===== HTML ===== -->
<!-- main071.php righe 484-490 -->
	<div id="container_rubrica">
		<div id="rubrica_filtro"></div>	
		<div id="rubrica_nomi"></div>	
			<div id="add_consumer" class="add_consumer" onclick="nuovo_cliente()" onMouseOver="sopra_pul_nuovo_cliente()" onMouseOut="fuori_pul_nuovo_cliente()">
        </div>  
		
    </div> 
<!-- main071.php righe 1005-1304 -->
	<div id="dettaglio_rubrica" class="ombra_elementi_1">
			<div id="chiudi_dettaglio_rubrica" onClick="chiudi_dettaglio_rubrica()" onmouseover="sopra_chiudi_rubrica()" onmouseout="fuori_chiudi_rubrica()" onmouseout="this.style.backgroundColor='#1e1a1a'"><svg id="close_rub" xmlns="http://www.w3.org/2000/svg" height="57px" viewBox="0 -960 960 960" width="57px" fill="#434343"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></div>
			<div id="chiudi_dettaglio_file" onClick="chiudi_dettaglio_file()" onmouseover="sopra_chiudi_file()" onmouseout="fuori_chiudi_file()" onmouseout="this.style.backgroundColor='#1e1a1a'"><svg id="close_file" height="57px" viewBox="0 -960 960 960" width="57px" fill="#434343"><path d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></div>
		
			<div id="float_menu_file" class="_non_selezionabile" onClick="" onmouseover="" onmouseout="" >
				<div id="mail_file" onclick="" onmouseover="sopra_mail_file()" onmouseout="fuori_mail_file()">
				<svg filter="url(#ombra-esterna)" height="63px" viewBox="0 -960 960 960" width="63px" fill="#c7c7c7"><path id="mail_file_svg" d="m734-164-42-42 73-74H584v-60h181l-73-74 42-42 146 146-146 146ZM140-280q-24.75 0-42.37-17.63Q80-315.25 80-340v-440q0-24.75 17.63-42.38Q115.25-840 140-840h560q24.75 0 42.38 17.62Q760-804.75 760-780v232q-7.5-1-15-1.5t-15-.5q-8 0-15 .5t-15 1.5v-185L416-532 140-732v392h351q-1 8-1 13.5v13.75q0 8.25.5 16.5T493-280H140Zm36-500 240 174 246-174H176Zm-36 440v-440 440Z"/></svg>
				
					
				</div>
			</div>
		
			<div id="float_menu_rubrica_top" onClick="" onmouseover="" onmouseout="" ></div>
			<div id="float_menu_rubrica_bottom" class="_non_selezionabile" onClick="" onmouseover="" onmouseout="" >
		<div id="edit_lock"  onclick="toggleFormEditMode()" onmouseover="sopra_edit_lock()" onmouseout="fuori_edit_lock()">
				
				<svg id="edit_lock_svg" filter="url(#ombra-esterna)" height="55px" viewBox="-7 -960 960 960" width="55px" fill="#FFFFFF"><path id="edit_lock_svg_path" d="M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm314.5-162.03Q557-324.06 557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22q31.83 0 54.33-22.03ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z"/></svg>
			
		</div>
			
		<div id="icon_printer"  onClick="apri_mail_selector()"  onmouseover="sopra_icon_printer()" onmouseout="fuori_icon_printer()">
		
				<svg id="icon_printer_svg" filter="url(#ombra-esterna)" xmlns="http://www.w3.org/2000/svg" height="67px" viewBox="0 0 161.17 178.81" width="49px" fill="#E7E7E7"><g id="Livello_x0020_1">
				  <g id="pdf_svg">
				   <g>
					<path id="pdf_svg_1" fill="#E7E7E7" d="M156.16 91.88l-14.94 0 0 -86.87c0,-2.77 -2.24,-5.01 -5,-5.01l-98.09 0c-1.45,0 -2.82,0.62 -3.78,1.71l-33.12 37.95c-0.79,0.92 -1.23,2.08 -1.23,3.3l0 130.84c0,2.77 2.24,5.01 5.01,5.01l131.21 0c2.76,0 5,-2.24 5,-5.01l0 -14.33 14.94 0c2.77,0 5.01,-2.25 5.01,-5.01l0 -57.57c0,-2.77 -2.24,-5.01 -5.01,-5.01zm-5 57.57l-107.42 0 0 -47.56 107.42 0 0 47.56 0 0zm-118.04 -131.1l0 19.6 -17.1 0 17.1 -19.6zm98.09 150.45l-121.2 0 0 -120.84 28.12 0c2.76,0 5,-2.24 5,-5l0 -32.95 88.08 0 0 81.87 -92.48 0c-2.76,0 -5,2.24 -5,5.01l0 57.57c0,2.76 2.24,5.01 5,5.01l92.48 0 0 9.33z"/>
					<path id="pdf_svg_2" fill="#E7E7E7" d="M72.87 111.3l-13.27 0 0 29.04 6.07 0 0 -10.48 6.95 0c7.81,0 9.26,-6.63 9.26,-9.26 0,-5.7 -3.39,-9.3 -9.01,-9.3zm-1.58 13.55l-5.62 0 0 -8.54 4.81 0c3.76,0 5.34,1.18 5.34,4.01 0,1.29 0,4.53 -4.53,4.53z"/>
					<path id="pdf_svg_3" fill="#E7E7E7" d="M99.4 111.3l-12.82 0 0 29.04 12.58 0c9.58,0 12.05,-8.98 12.05,-15.21 0,-5.5 -2.02,-13.83 -11.81,-13.83zm-0.97 24.03l-5.91 0 0 -19.02 5.83 0c2.59,0 6.67,0.69 6.67,9.27 0,4.77 -1.66,9.75 -6.59,9.75z"/>
					<polygon id="pdf_svg_4" fill="#E7E7E7" points="115.78,111.3 115.78,140.34 121.85,140.34 121.85,128.13 134.63,128.13 134.63,122.99 121.85,122.99 121.85,116.43 136.45,116.43 136.45,111.3 "/>
					<path id="pdf_svg_5" fill="#E7E7E7" d="M59.28 86.01l53.26 0c1.35,0 2.59,-0.75 3.21,-1.95 0.62,-1.2 0.52,-2.65 -0.26,-3.75l-26.63 -37.51c-0.68,-0.96 -1.78,-1.52 -2.95,-1.52 -1.17,0 -2.27,0.56 -2.95,1.52l-26.63 37.51c-0.78,1.1 -0.88,2.55 -0.26,3.75 0.62,1.2 1.86,1.95 3.21,1.95zm26.63 -34.87l19.63 27.64 -39.26 0 19.63 -27.64z"/>
				   </g>
				  </g>
				 </g>
			</svg>
				
		</div>
			
        <div id="delete_consumer" onclick="mostraConfermaElimina()" onmouseover="sopra_delete_consumer()" onmouseout="fuori_delete_consumer()" style="cursor:pointer">
				<svg id="delete_consumer_svg" filter="url(#ombra-esterna)" xmlns="http://www.w3.org/2000/svg" height="57px" viewBox="0 -960 960 960" width="57px" fill="#E7E7E7"><path id="delete_consumer_svg_path" d="M261-120q-24.75 0-42.37-17.63Q201-155.25 201-180v-570h-41v-60h188v-30h264v30h188v60h-41v570q0 24-18 42t-42 18H261Zm438-630H261v570h438v-570ZM367-266h60v-399h-60v399Zm166 0h60v-399h-60v399ZM261-750v570-570Z"/></svg>
				
		</div>

			
				
			</div>
		  
		
						<div id="freccia_rub_sx" onclick="naviga_det_rubrica(-1)" onMouseOver="sopra_freccia_sx()" onMouseOut="fuori_freccia_sx()"  style="cursor:pointer;">
			<svg id="freccia_sx_icona_" fill="#535353" xml:space="preserve" width="77px" height="210px" version="1.0" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 4.4 11.99"
			 <defs>
			 </defs>
			 <g >
			  <polygon  points="4.4,0 4.4,3.93 2.88,5.99 4.4,8.06 4.4,11.99 0,5.99 "/>
			 </g>
			</svg>
		</div>
			<div id="freccia_rub_dx" onclick="naviga_det_rubrica(1)" onMouseOver="sopra_freccia_dx()" onMouseOut="fuori_freccia_dx()" style="cursor:pointer;">
				<svg id="freccia_dx_icona_" fill="#535353" xml:space="preserve" width="77px" height="210px" version="1.0" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 5.54 15.12"
			 <defs>
			 </defs>
			 <g >
			  <polygon  points="0,0 0,4.96 1.91,7.56 0,10.16 0,15.12 5.54,7.56 "/>
			 </g>
			</svg>
</div>		
<div id="clip_top_rubrica">
	    <div id="edit_doc_label" >EDIT MODE DOCUMENTO</div> 
		<svg id="svg_clip_top_rub" fill="#E31E24" xml:space="preserve" width="377px" height="52px" version="1.0" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
					viewBox="0 0 142.56 12.23"
					 <defs>
					 </defs> 
					 <g >
					  <polygon points="9.37,0 133.19,0 142.56,9.78 131.25,9.78 127.95,12.23 14.61,12.23 11.31,9.78 0,9.78 "/>
					 </g> 
					</svg>  

</div>
<div id="filter_icon" class="filter_icon _non_selezionabile"><svg id="filter_icon_svg" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#FFFFFF"><path d="M456.18-192Q446-192 439-198.9t-7-17.1v-227L197-729q-9-12-2.74-25.5Q200.51-768 216-768h528q15.49 0 21.74 13.5Q772-741 763-729L528-443v227q0 10.2-6.88 17.1-6.89 6.9-17.06 6.9h-47.88ZM480-498l162-198H317l163 198Zm0 0Z"/></svg></div>
<div id="contatore_pos_rubrica" class="contatore_pos_rubrica _non_selezionabile"></div>

<!--<div class="det_cell_label">Nome</div>
<input type="text" class="det_input_field" id="det_nome" />  
</div>--> 

<!--form per inserire i dati del cliente/visualizzare pratiche già editate--> 
			<div id="det_top_section">
			<div id="dett_cliente"> 
			<div id="dett_cliente_nome" class="_non_selezionabile"> 
			 <input type="text" class="input_anagraf_nome" style="top: -8px" id="anagraf_nome" oninput="this.value=this.value.replace(/[^a-zA-Z0-9\s'-]/g,'')" placeholder="COGNOME NOME"/>
			</div> 
			<div id="dett_cliente_anagraf"> 
				<div id="anagraf_tipo_cliente_row" style="position:absolute; top: 0px; left:6px; align-items:center; gap:8px; height:26px;"> 
					<div id="anagraf_tipo_cliente_btn" onclick="toggle_tipo_cliente()" style="position: absolute; top: 9px; left: -2px; height: 37px; width: 60px; background-color:#1e1a1a; border:1px solid #5f5f5f; border-radius:4px; cursor:pointer; font-size:13px; font-weight:700; color:#c5c5c5; user-select:none; box-sizing:border-box; display:flex; align-items:center; justify-content:center; gap:2px; overflow:hidden;"><span id="anagraf_tipo_cliente_icona" style="display:inline-block; width:37px; height:37px; background-image:url(img/house_factory.png); background-repeat:no-repeat; background-position:3px 1px; flex-shrink:0;"></span><span style="font-size:11px; line-height:1;">&#9660;</span></div> 
				</div>  
				<div id="anagraf_tipo_cliente_dropdown" style="display:none; position:fixed; top:58px; left:18px; z-index:1100000; background-color:#2a2a2a; border:1px solid #c30a0a; padding:4px; min-width:140px;"> 
					<div class="det_tipo_opt tipo_cliente_icona_opt" onclick="seleziona_tipo_cliente('privato')" style="display:flex; align-items:center; gap:8px; padding:4px 8px;"><div style="width:37px; height:37px; flex-shrink:0; background-image:url(img/house_factory.png); background-repeat:no-repeat; background-position:3px 1px; background-color:#1e1a1a; border-radius:3px;"></div><span>Privato</span></div>
					<div class="det_tipo_opt tipo_cliente_icona_opt" onclick="seleziona_tipo_cliente('azienda')" style="display:flex; align-items:center; gap:8px; padding:4px 8px;"><div style="width:37px; height:37px; flex-shrink:0; background-image:url(img/house_factory.png); background-repeat:no-repeat; background-position:3px -35px; background-color:#1e1a1a; border-radius:3px;"></div><span>Azienda</span></div>
					<div class="det_tipo_opt tipo_cliente_icona_opt" onclick="seleziona_tipo_cliente('pubblico')" style="display:flex; align-items:center; gap:8px; padding:4px 8px;"><div style="width:37px; height:37px; flex-shrink:0; background-image:url(img/house_factory.png); background-repeat:no-repeat; background-position:3px -73px; background-color:#1e1a1a; border-radius:3px;"></div><span>Pubblico</span></div>
					<div class="det_tipo_opt tipo_cliente_icona_opt" onclick="seleziona_tipo_cliente('extra')" style="display:flex; align-items:center; gap:8px; padding:4px 8px;"><div style="width:37px; height:37px; flex-shrink:0; background-image:url(img/house_factory.png); background-repeat:no-repeat; background-position:3px -300px; background-color:#1e1a1a; border-radius:3px;"></div><span>Extra</span></div>
				</div>
				<div id="anagraf_label_comune" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top:5px; left: 410px;">COMUNE</div> 
				<input type="text" class="input_anagraf" style="left:411px; top:23px; width: 258px;" id="anagraf_comune" oninput="search_comuni()" placeholder=""/> 
				<div id="comuni_dropdown" class="ombra_elementi"></div>				
				<div id="anagraf_label_comune" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top:5px; left: 677px;">CAP</div> 
				<input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="input_anagraf" style="left: 678px; top:23px; width: 65px; text-align: center" id="anagraf_cap" minlength="5" maxlength="5"placeholder=""/> 
				
				<div id="anagraf_label_indirizzo" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: 5px; left: 80px;">INDIRIZZO</div>
				<input type="text" class="input_anagraf" style="left:77px; top: 23px; width: 324px;" id="anagraf_indirizzo" oninput="this.value=this.value.replace(/[^a-zA-Z0-9\s.,'-\/]/g,'')" placeholder=""/>
				<div id="select_land" class="provincia_list" onclick="clicca_select_land()">
				<select name="provincia" id="provincia" class="input_provincia" style="width: 100%; height: 100%; top: 0; left: 0; z-index: 100000; position: absolute;  -webkit-appearance: none;  -moz-appearance: none;  appearance: none; pointer-events: none; text-align: center;" onchange="aggiorna_provincia_selezionata()">
					<option value="">Prov</option> 
				</select>
				</div>  
				<div id="anagraf_label_email" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: 53px; left: 6px;">E-MAIL</div>
				<input type="text" class="input_anagraf" style="left:6px; top: 71px; width: 272px;" id="anagraf_email" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_\-\\\s]/g,'').substring(0,10000)" onblur="controlla_mail('anagraf_email')" placeholder=""/>
				<div id="anagraf_label_tel" class="label_anagrafe det_field_label_readonly" style="top: 53px; left: 285px;">TELEFONO</div>
				<input type="text" class="input_anagraf" style="left:287px; top: 71px; width: 120px;" id="anagraf_tel" maxlength="15"  placeholder="+39"  onfocus="if(this.value==='') this.value='+39';"oninput="if(!this.value.startsWith('+39')) this.value='+39' + this.value.replace(/[^0-9]/g,''); this.value='+39' + this.value.substring(3).replace(/[^0-9]/g,''); controlla_stato_pratica();"/>
				<div id="det_cell_label" class="label_anagrafe det_field_label_readonly" style="top: 53px; left: 416px;">CANALE CONTATTO</div>
					<div id="det_canale_wrap" class="det_canale_wrap" style="position: absolute; top: 71px; left: 416px; width: 173px;"> 
						<div class="det_canale_btn" id="det_canale_btn" onclick="toggle_canale()">Seleziona Contatto</div>  
						<div id="det_canale_dropdown" class="ombra_elementi">  
							<div class="det_tipo_opt" onclick="seleziona_canale('Social')">Social</div> 
							<div class="det_tipo_opt" onclick="seleziona_canale('Sito web')">Sito web</div> 
							<div class="det_tipo_opt" onclick="seleziona_canale('Passaparola')">Passaparola</div> 
							<div class="det_tipo_opt" onclick="seleziona_canale('Commerciale')">Commerciale</div>
						<div class="det_tipo_opt" style="cursor: default; font-size: 11px; padding: 5px 8px 2px 8px;"><input type="text" class="input_contact" id="anagraf_segnalatore" placeholder="ALTRO" onkeydown="if(event.keyCode==13){var v=this.value.trim();if(v){seleziona_canale(v);}}" onclick="event.stopPropagation();" onblur="var v=this.value.trim();if(v){document.getElementById('det_canale_btn').innerHTML=v;det_canale_btn=v;aggiorna_colore_dropdown('#det_canale_btn',v,'');}"/></div>
						</div> 
					</div>  
					<div id="det_commerciale_label" class="label_anagrafe det_field_label_readonly" style="top: 53px; left: 564px;" >COMMERCIALE</div>
				<div id="det_commerciale"> 
						
						<div id="det_commerciale_btn" class="det_comm_sel" onclick="toggle_commerciale()">Seleziona</div>
						<div id="det_commerciale_dropdown">
							<div class="det_tipo_opt" onclick="seleziona_commerciale('Michele')">Michele</div>
							<div class="det_tipo_opt" onclick="seleziona_commerciale('Giorgio')">Giorgio</div>
							<div class="det_tipo_opt" onclick="seleziona_commerciale('Nicola')">Nicola</div>
						</div>
				</div> 
				<div id="anagraf_label_data" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: 53px; left: 707px;">DATA</div>
				<input type="text" class="input_anagraf" style="left:706px; top: 71px; width: 101px; text-align: center" id="anagraf_data" placeholder="gg/mm/aaaa" maxlength="10" oninput="formatta_data(this)"/>
										<div id="det_province_dropdown" class="ombra_elementi _non_selezionabile">  
						</div>
	

				<div id="container_dati_azienda">
					<div id="anagraf_label_piva" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: -4px; left: 6px;">PARTITA IVA</div>
					<input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="input_anagraf" style="left:6px; top: 14px; width: 104px;" id="anagraf_piva" maxlength="11" placeholder=""/>
					<div id="anagraf_label_emailref" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: -4px; left: 120px;">EMAIL REFERENTE</div>
					<input type="text" class="input_anagraf" style="left:120px; top: 14px; width: 272px;" id="anagraf_emailref" maxlength="320" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,320)"  placeholder=""/>
					<div id="anagraf_label_pec" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: -4px; left: 402px;">PEC</div>
					<input type="text" class="input_anagraf" style="left:402px; top: 14px; width: 272px;" id="anagraf_pec" maxlength="320" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,320)"  placeholder=""/>
				    <div id="anagraf_label_codice_univoco" class="label_anagrafe det_field_label_readonly _non_selezionabile" style="top: -4px; left: 684px;">CODICE UNIVOCO</div>
				    <input type="text" class="input_anagraf" style="left:684px; top: 14px; width: 124px; text-align: center" id="anagraf_codice_univoco" maxlength="7" oninput="this.value=this.value.replace(/[^A-Za-z0-9]/g,'').substring(0,10)"/>
				</div> 
			</div>	  
			<div id="dett_cliente_lavori" class="_non_selezionabile">
			</div> 
				<div id="mail_list_container" class="ombra_elementi">
				<input type="text" class="input_mail_list" id="mail_item_0" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 1"/>
				<input type="text" class="input_mail_list" id="mail_item_1" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 2"/>
				<input type="text" class="input_mail_list" id="mail_item_2" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 3"/>
				<input type="text" class="input_mail_list" id="mail_item_3" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 4"/>
				<input type="text" class="input_mail_list" id="mail_item_4" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 5"/>
				<input type="text" class="input_mail_list" id="mail_item_5" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 6"/>
				<input type="text" class="input_mail_list" id="mail_item_6" maxlength="10000" oninput="this.value=this.value.replace(/[^a-zA-Z0-9.@_-]/g,'').substring(0,10000)" onkeydown="if(event.keyCode==13){nascondilistamail();}" placeholder="email 7"/>
				</div>
				<!--<div id="modal_listamail"></div>-->
		</div>  
			</div> 
				  <!-- <div class="etichetta_stato_pratica"> 
				   <div class="det_cell_label_stato">Stato pratica <div id="det_stato_ind"></div></div>
				</div> --> 

			<div id="det_middle_section">
				<div class="det_mid_col_tabs" style="overflow: visible" id="det_col_commessa" style="background-color: #5b5b5b">
					<div id="header_tab_anagrafica" class="_non_selezionabile">
						<div id="anagrafica_tab_button_1" onMouseOver="sopra_tab(1)" onMouseOut="fuori_tab(1)" onclick="click_button_tab(1)" style="background-color:  rgb(187 156 9) ">COMMESSA</div>
						<div id="anagrafica_tab_button_2" onMouseOver="sopra_tab(2)" onMouseOut="fuori_tab(2)" onclick="click_button_tab(2)" style="background-color:  rgb(38 191 193) ">TO DO</div>
						<div id="anagrafica_tab_button_3" onMouseOver="sopra_tab(3)" onMouseOut="fuori_tab(3)" onclick="click_button_tab(3)" style="background-color:  rgb(29 122 29) ">DOCUMENTI</div>
						<div id="anagrafica_tab_button_4" onMouseOver="sopra_tab(4)" onMouseOut="fuori_tab(4)" onclick="click_button_tab(4)" style="background-color:  rgb(51,51,51) ">FILE</div>
					</div> 
					<div id="anagrafica_content">
						<div id="anagrafica_tab_1" class="_non_selezionabile">COMMESSE</div>
						<div id="anagrafica_tab_2" class="_non_selezionabile">LISTA DA FARSI<div></div></div>
						<div id="anagrafica_tab_3" class="_non_selezionabile">DOCUMENTI RICHIESTI</div>
						<div id="anagrafica_tab_4" class="_non_selezionabile">
							<div id="upload_file" style="width: 311px;height: :100px !important; overflow:hidden">
								<form action="upload.php" class="dropzone" id="mioDropzone">
								  <!-- Fallback per utenti senza JavaScript attivo -->
								  <div class="fallback">
									<input id="caciota" name="file" type="file" multiple />
								  </div>
								</form>
							</div>  
						</div>
					</div>
					<div id="enlarge_tabs" class="_non_selezionabile" onclick="cliccato_enlarge_tabs()" onMouseOver="sopra_enlarge_tabs()" onMouseOut="fuori_enlarge_tabs()"></div>
					<div id="coda_file_modal" class="_non_selezionabile all_blur_lite"></div>
					<div id="coda_file_ghost" class="_non_selezionabile"></div>
					<div id="coda_file" class="_non_selezionabile dropzone dropzone-previews" onclick=""></div>
					<div id="invia_coda_file" class="ombra_elementi_3 _non_selezionabile" onclick="esegui_upload_file()">CARICA ELEMENTI</div>
					<div id="freccia_upload" class="_non_selezionabile" ></div>
					<div id="invia_coda_file_mb" class="_non_selezionabile" ></div>
					<div id="chiudi_coda_file" class="_non_selezionabile" onmouseover="sopra_chiudi_coda()" onmouseout="fuori_chiudi_coda()" onclick="chiudi_coda_file()"><svg filter="" id="close_coda_svg" xmlns="http://www.w3.org/2000/svg" height="57px" viewBox="0 -960 960 960" width="57px" fill="#eee"><path  id="close_coda_svg_path" d="m249-207-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></div>
					<div id="menu_coda_file" class="_non_selezionabile" ></div>
					<div id="menu_coda_file_sx" class="_non_selezionabile" >
						<div id="titolo_destinazione_upload" class="_non_selezionabile">DESTINAZIONE</div>
                        <div id="container_pulsanti_dest_folder" class="_non_selezionabile">
								<div id="dest1" class=" pulsante_cartella_file _non_selezionabile" >SCADA CLIENTE</div>
								<div id="dest2" class=" pulsante_cartella_file _non_selezionabile" >SCADA CLIENTE</div>
								<div id="dest3" class=" pulsante_cartella_file _non_selezionabile" >SCADA CLIENTE</div>
								<div id="dest4" class=" pulsante_cartella_file _non_selezionabile" >SCADA CLIENTE</div>
					 </div>
					
			  </div>
						<div id="clear_coda" onclick="svuota_coda()"></div>
				</div>
				<div class="det_mid_col" id="det_col_risparmio" style="padding-top: 33px; width: 221px; left: 585px;">
					<div class="det_mid_label" style="position: absolute; top: 5px;font-size: 20px; font-weight: 700; cursor: pointer;" onclick="mostra_todo_da_colonna('risparmio')">EFFICIENTAMENTO</div>
		       <!--inserito onClick per rendere anche le voci dei pulsanti cliccabili--> 
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_risp_1" onclick="cliccato_check_mid('risp_1'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_1" onclick="cliccato_check_mid('risp_1')"> cappotto</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_risp_2" onclick="cliccato_check_mid('risp_2'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_2" onclick="cliccato_check_mid('risp_2')"> isol. tetto</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_risp_6" onclick="cliccato_check_mid('risp_6'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_6" onclick="cliccato_check_mid('risp_6')"> sottotetto</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_risp_5" onclick="cliccato_check_mid('risp_5'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_5" onclick="cliccato_check_mid('risp_5')"> infissi</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_risp_3" onclick="cliccato_check_mid('risp_3'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_3" onclick="cliccato_check_mid('risp_3')"> oscuranti</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_risp_4" onclick="cliccato_check_mid('risp_4'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_4" onclick="cliccato_check_mid('risp_4')"> schermat. solare</span></div>
				</div>  
				<div class="det_mid_col" id="det_col_impianti" style="padding-top: 33px; width: 221px; left: 357px;">
					<div class="det_mid_label" style="position: absolute; top: 5px; font-weight:700; font-size:20px; cursor: pointer;" onclick="mostra_todo_da_colonna('impianti')">IMPIANTI</div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_imp_1" onclick="cliccato_check_mid('imp_1'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_imp_1" onclick="cliccato_check_mid('imp_1')"> impianto fv</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_imp_2" onclick="cliccato_check_mid('imp_2'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_imp_2" onclick="cliccato_check_mid('imp_2')"> colonnina ric.auto</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_imp_3" onclick="cliccato_check_mid('imp_3'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_imp_3" onclick="cliccato_check_mid('imp_3')"> batterie accumulo</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_imp_4" onclick="cliccato_check_mid('imp_4'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_imp_4" onclick="cliccato_check_mid('imp_4')"> caldaia ibrida</span></div>
					<div class="det_check_row"><div class="check_mid _non_selezionabile" id="check_imp_5" onclick="cliccato_check_mid('imp_5'); aggiornaTodoList();"></div><span class="check_mid_label" id="label_risp_imp_5" onclick="cliccato_check_mid('imp_5')"> pompa di calore</span></div>
				</div>
				<div id="det_col_consumi">
					<div id="det_cons_gest_box" class="det_cons_cell">
						<div class="det_gestore_label">GESTORE RETE</div>
						<input type="text" class="det_input_gestore" id="det_cons_gest" oninput="this.value=this.value.replace(/[^a-zA-Z0-9\s]/g,'')" />
					</div> 
					<div id="det_cons_pot_box" class="det_cons_cell">
						<div class="det_consumo_label">POT. CONTATORE</div> 
						<input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="det_input_consumo_sm" id="det_cons_cont"/>
						<span class="unit">kW</span>
					</div> 
					<div id="det_cons_ann_box" class="det_cons_cell">  
						<div class="det_consumo_label">CONSUMO ANNUO</div> 
						<input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="det_input_consumo_annuo" id="det_cons_annuo"/>
						<span class="unit_annuo">kWh</span>  
					</div>  
					
				   <!--aggiunto un div per lo stato pratica-->
					
				</div> 
				<div id="energy_call">
					<div id="title_call">INCENTIVO</div>
						<div id="det_bando_btn" class="det_comm_sel" onclick="toggle_bando()">Seleziona</div>
						<div id="det_bando_dropdown">
							<div class="det_tipo_opt" onclick="seleziona_bando('Detrazione fiscale 58% prima casa')">Detrazione fiscale 58% prima casa</div>
							<div class="det_tipo_opt" onclick="seleziona_bando('Detrazione fiscale 37% prima casa')">Detrazione fiscale 37% prima casa</div>
							<div class="det_tipo_opt" onclick="seleziona_bando('Comunità energetica rinnovabile')">Comunità energetica rinnovabile</div>
							<div class="det_tipo_opt" onclick="seleziona_bando('Agrivoltaico')">Agrivoltaico</div>
							<div class="det_tipo_opt" onclick="seleziona_bando('Ipermortamento')">Ipermortamento</div>
						</div>
				</div> 
				   <!--aggiunta dropdown per modalita di pagamento-->
					<div id="extra_frame" class="_non_selezionabile" style="display:block;">
						<div id="payments_option" class="payment_title">METODO DI PAGAMENTO</div>
						<div id="det_payment_btn" onclick="toggle_payment()">Seleziona</div>
						<div id="det_payment_dropdown">
							<div class="det_tipo_opt" onclick="seleziona_payment('Bonifico ordinario')">Bonifico ordinario</div>
							<div class="det_tipo_opt" onclick="seleziona_payment('Bonifico detrazione')">Bonifico detrazione</div>
							<div class="det_tipo_opt" onclick="seleziona_payment('Finanziamento')">Finanziamento</div>
							<div class="det_tipo_opt" onclick="seleziona_payment('Assegno')">Assegno</div>
							<div class="det_tipo_opt" onclick="seleziona_payment('Contanti')">Contanti</div>
						</div> 
					</div>
			</div>
			<div id="det_note_section" class="_non_selezionabile">
				<div class="det_mid_label det_note_label">NOTE RICHIESTA</div>
				<div id="contatore_note">1-777</div>
				<textarea style="resize: none;" class="det_textarea" id="det_note" maxlength="1500" rows="4" oninput="this.value=this.value.replace(/[^a-zA-Z0-9\s.,!?':;()-]/g,'')" placeholder="Inserisci note..."></textarea>
			</div>
		    <div id="stato_pratica" class="_non_selezionabile"> 
		    <div class="det_mid_label" style="position: absolute; top: 4px; left: 10px;">STATO PRATICA</div>
					<div id="det_stato_pratica_row"> 
						<div class="det_stato_sq" id="det_sq_0" title="Grigio" onclick="seleziona_stato_pratica(0)"></div>
						<div class="det_stato_sq" id="det_sq_1" title="Giallo" onclick="seleziona_stato_pratica(1)"></div>
						<div class="det_stato_sq" id="det_sq_2" title="Rosso" onclick="seleziona_stato_pratica(2)"></div>
						<div class="det_stato_sq" id="det_sq_3" title="Verde" onclick="seleziona_stato_pratica(3)"></div>
					</div>  
			</div>

			<!--pulsante per salvare pratica-->
			<div id="autorizathion_privacy"><span class="auth_label">AUTORIZZAZIONE DATI</span><div class="auth_checkbox _non_selezionabile" id="check_auth" onclick="cliccato_check_auth();"></div></div>
			<div id="btn_salva_pratica" onclick="saveCliente()">SALVA PRATICA</div>
			<div id="btn_salva_pratica_ghost"></div>

<!-- main071.php righe 1306-1366 -->
<div id="dock_rubrica" >
		<svg id="svg_dock_rub" fill="#E31E24" filter="url(#ombra-esterna)" xml:space="preserve" width="977px" height="57px" version="1.0" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			 

					viewBox="0 0 777.06 45.9"
					 <defs>
						<filter id="ombra-esterna" x="-20%" y="-20%" width="140%" height="140%">
						  <feDropShadow dx="0" dy="5" stdDeviation="5" flood-color="#000000" flood-opacity="0.7"/>
						</filter>
					 </defs>
					 <g >
					  <path d="M49.92 0l338.61 0 338.62 0c21.08,0 41.42,25.19 49.91,45.9l-388.53 0 -388.53 0c8.5,-20.71 28.84,-45.9 49.92,-45.9z" filter="url(#ombra-esterna)"/>
					 </g>
					</svg>

</div>	
<div id="container_dock_rubrica">
	<div class="elemento_container_dock_rubrica" onclick="apri_dettaglio_file()"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
	<div class="elemento_container_dock_rubrica"></div>
</div>
<div id="container_dock_rubrica_mobile">
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>

	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
	<div class="elemento_container_dock_rubrica_mobile"></div>
</div>
<div id="container_file" class="ombra_elementi">
	<div id="container_file_header" class="_non_selezionabile">TESTATA</div>
	<iframe id="container_file_file" src="pdf_esportati/bonzo.pdf" width="100%" height="100%"></iframe>
</div>
<script>
// ===== JS =====
// ---- main071.php righe 2895-3793
function caricaRubrica() {
   // Sincronizza clienti_filtrati con i dati freschi di clienti (dopo loaddd)
   mostra_barra_rubrica();
   	   popola_Rubrica(filtro_rubrica_iniz);
	   alfabeto();
       verifica_lettere_alfabeto();
	   aggiorna_contatore_rubrica();
					 
	if (!dispositivo_mobile()){ 
	
	$('#rubrica_nomi').css("overflow","hidden")
	$('#container_rubrica').css("overflow","none");
	
					
	} else {
		
    $('#rubrica_nomi').getNiceScroll().remove();
    $('#rubrica_nomi').css("overflow","auto")
    $('#container_rubrica').css("overflow","hidden");

	}
}
//////////////////////////////////////////////////////////////////////////
// aggiorna il contatore totale dei contatti presenti in rubrica
function aggiorna_contatore_rubrica() {
   var count = (typeof clienti !== 'undefined' && clienti) ? clienti.length : 0;
   $('#num_rubrica').text(count);
}
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//funzione per cambiare il nome del placeholder se il tipo cliente è azienda 
function change_rub_placeholder() {
	if(tipo_cliente == "azienda" ) {
		$('#anagraf_nome').attr("placeholder", "NOME REFERENTE - AZIENDA");
	} else {
		$('#anagraf_nome').attr("placeholder", "COGNOME NOME");
	}
}
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
///funzione per verificare lo stato pratica e il suo valore. se non è 0 lo nasconde
function verify_status_practice() {
	$('.rubrica_riga').each(function(i) {
		var valore = parseInt(clienti_filtrati[i][11], 10);
		var $stato = $(this).find('.rubrica_stato_pratica');
		// stato mai impostato (-1, vuoto o null) => quadrato trasparente
		if (isNaN(valore) || valore < 0) {
			$stato.css('background-color','transparent');
		} else {
			$stato.css('background-color', colori_stato_pratica[String(clienti_filtrati[i][11]).toLowerCase()] || "#9c9292");
		}
	});
}
 //////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/////////////////duplicata funzione carica rubrica	
function caricaRubrica_() {
	popola_Rubrica(filtro_rubrica_iniz); 
	alfabeto();
	verifica_lettere_alfabeto(); 
	
	
	if (!dispositivo_mobile()){ 
	$('#rubrica_nomi').css("overflow","hidden")
	$('#container_rubrica').css("overflow","none");
	
					
	}else{
							 $('#rubrica_nomi').getNiceScroll().remove();
					 $('#rubrica_nomi').css("overflow","auto")
					 $('#container_rubrica').css("overflow","hidden");

	}
    // Mostriamo un messaggio di caricamento
//    $("#contact_list").html("<p style='color:white; padding:20px;'>Caricamento in corso...</p>");

//    $.ajax({
//        url: "get_contatti.php", // Il file PHP che estrarrà i dati dal database
//        type: "GET",
//        success: function(data) {
//            $("#contact_list").html(data);
//        },
//        error: function() {
//            $("#contact_list").html("<p style='color:red;'>Errore nel caricamento dei dati.</p>");
//        }
//    }); 
	
	
}
		
/////////////////////////////////////////////////////////////////////////////
function popola_Rubrica(filtro_rubric) {
	// Chiude transfers_list se aperto
	if(aperto_transfer_list != -1){
		chiudi_transfer_list();
	}

	var isFiltroSpeciale = filtro_rubric.length > 1 && filtro_rubric !== "all";
	// Verifica se è un filtro stato pratica (contratto_0, contratto_1, etc)
	var isFiltroStatoPratica = filtro_rubric.startsWith("contratto_");
	// Verifica se è un filtro icona cliente (solo_cliente, solo_cer, solo_azienda, solo_pubblico)
	var isFiltroIconeCliente = isFiltroSpeciale && !isFiltroStatoPratica && ["solo_cliente", "solo_cer", "solo_azienda", "solo_pubblico"].includes(filtro_rubric);

	if(filtro_rubric !== "all" && !isFiltroSpeciale && lettere_iniziali[filtro_rubric.toUpperCase().charCodeAt(0)] == 0 ){
		return;
	}
    var nomirubrica=''; 
	alfabeto();
	verifica_lettere_alfabeto();
		for (x=65 ; x<=90; x++){ $("#lt"+x).removeClass("filtro_rubrica_letter_selected");} 
//se clicco una seconda volta sul filtro il filtro si disabilita e torna tutto alla visualizzazione di prima 			
		if(isFiltroSpeciale && filtro_rub_attivo == filtro_rubric){
			filtrarubrica("all");
			$("#container_rubrica").css("background-color","#878787")
			$(".filtro_icone_cliente, .filtro_icone_preventivo").css("outline","");
			$(".filtro_icone_cliente").css("background-color","#1a1a1a");
			// Resetta icona provincia
			$("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
			provincia_popup_selezionata = "";
		}else if(isFiltroSpeciale){
			filtrarubrica(filtro_rubric);
			$(".filtro_icone_cliente, .filtro_icone_preventivo").css("outline","");
			$(".filtro_icone_cliente").css("background-color","#1a1a1a");
			$("[onClick*='"+filtro_rubric+"'], [onclick*='"+filtro_rubric+"']").filter(".filtro_icone_cliente").css("background-color","#DFA102")
			// Resetta lettere selezionate e icona provincia
			for(var i=65;i<=90;i++){ $("#lt"+i).removeClass("filtro_rubrica_letter_selected").addClass("filtro_rubrica_letter_up"); }
			$("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
			provincia_popup_selezionata = "";
			// Gestione background in base al tipo di filtro
			if(isFiltroIconeCliente) {
				// Filtro icone cliente = background giallo
				$("#container_rubrica").css("background-color","rgb(223, 161, 2)");
			} else if(isFiltroStatoPratica) {
				// Filtro stato pratica = background grigio (nessun cambiamento)
				$("#container_rubrica").css("background-color","#878787");
			}
		}else if((filtro_rubric!=filtro_rub_attivo)&&filtro_rubric!="all"){
			$("#lt"+filtro_rubric.toUpperCase().charCodeAt(0)).removeClass("filtro_rubrica_letter_up").addClass("filtro_rubrica_letter_selected");
			filtrarubrica(filtro_rubric);
			$("#container_rubrica").css("background-color","#e70000")
			$(".filtro_icone_cliente").css("background-color","#1a1a1a");
			$("[onClick*='"+filtro_rubric+"'], [onclick*='"+filtro_rubric+"']").filter(".filtro_icone_cliente").css("background-color","#DFA102")
			// Resetta icone cliente e provincia
			$(".filtro_icone_cliente").css("background-color","#1a1a1a");
			$("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
			provincia_popup_selezionata = "";
			// Filtro lettere = background rosso
			$("#container_rubrica").css("background-color","#e70000");
		}else if(filtro_rubric==filtro_rub_attivo){
				$("#lt"+filtro_rubric.toUpperCase().charCodeAt(0)).removeClass("filtro_rubrica_letter_selected").addClass("filtro_rubrica_letter_up");
				filtrarubrica("all");
				$("#container_rubrica").css("background-color","#878787")
				$(".filtro_icone_cliente").css("background-color","#1a1a1a");
				// Resetta icona provincia
				$("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
				provincia_popup_selezionata = "";
			 }else if(filtro_rub_attivo=="all"){
						$("#lt"+filtro_rubric.toUpperCase().charCodeAt(0)).removeClass("filtro_rubrica_letter_selected").addClass("filtro_rubrica_letter_up");
						filtrarubrica("all");
						$("#container_rubrica").css("background-color","#878787")
						$(".filtro_icone_cliente").css("background-color","#1a1a1a");
						// Resetta icona provincia
						$("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
						provincia_popup_selezionata = "";
					  }else if(filtro_rubric=="all"){
						// Caso: richiesto "all" ma filtro attivo è diverso (es. provincia)
						filtrarubrica("all");
						$("#container_rubrica").css("background-color","#878787")
						$(".filtro_icone_cliente").css("background-color","#1a1a1a");
						// Resetta icona provincia
						$("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
						provincia_popup_selezionata = "";
					  }
	// attivo selezione lettera
	
	for(x=0; x<=clienti_filtrati.length-1; x++) { 
		var tipo_cl = String(clienti_filtrati[x][2]).toLowerCase();
		var y_icona = (tipo_cl=='pubblico') ? '-73px' : (tipo_cl=='azienda' ? '-35px' : '1px');
		var filtro_tipo = (tipo_cl=='pubblico') ? 'solo_cer' : (tipo_cl=='azienda' ? 'solo_azienda' : 'solo_cliente');
	nomirubrica=nomirubrica+"<div class='rubrica_riga' onClick='cliccato_nome_rubrica("+trova_elemento_array(clienti_filtrati,0,clienti_filtrati[x][0])+")'><div class='icona_tipo_cliente' onClick='event.stopPropagation();popola_Rubrica(\""+filtro_tipo+"\")' style='background-position: 3px "+y_icona+"'></div>"+"<div class='rubrica_nome'>"+clienti_filtrati[x][1].toUpperCase()+"</div>"+"<div class='rubrica_stato_pratica' style='background-color:" + (colori_stato_pratica[String(clienti_filtrati[x][11]).toLowerCase()] || "#9c9292") + "'>"+"</div>"+"<div class='rubrica_indirizzo'>"+clienti_filtrati[x][3]+"</div>"+"<div class='rubrica_provincia'>"+clienti_filtrati[x][5]+"</div>"+"</div>";
	}				
	$("#rubrica_nomi").html(nomirubrica); 
	$("#container_rubrica").addClass("ombra_elementi").fadeIn(tempo_transizioni);  
	$("#rubrica_filtro").delay(tempo_transizioni).fadeIn(tempo_transizioni);
	$("#middle_btm_bar").delay(tempo_transizioni).fadeIn(tempo_transizioni);
	$("#rubrica_nomi").getNiceScroll().remove();
	$("#rubrica_nomi").niceScroll({
						  cursorcolor:"rgb(255, 0, 0)", 
						  cursorborder: "0px none #000",
						  cursorborderradius: "0px", 
						  cursoropacitymax:"0.5",
						  cursorwidth:"11px",
						  autohidemode:"true",
						  railoffset: {top:0,left:21},
						  horizrailenabled: "false",
						  background:"rgba(255,255,255,0.11)"
						  //background:'#E5E9E7'
						});
	// spengo altri pulsanti add e accendo quello giusto
		$("#add_consumer").delay(tempo_transizioni).fadeIn(tempo_transizioni);
		$("#add_ticket").fadeOut(tempo_transizioni);
		$("#add_warehouse").fadeOut(tempo_transizioni);
		$("#add_order").fadeOut(tempo_transizioni);

		$("#filtri_magazzino").fadeOut(tempo_transizioni);

		verify_status_practice();

}
/////////////////////////////////////////////////////////////////////////////
var det_rubrica_idx_corrente = -1;
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////trova cliente completeo con id 
function trova_cliente_completo(id) {
	for(var i = 0; i < set_clienti_loaded.length; i++) {
		if(String(set_clienti_loaded[i][30]) === String(id)) return set_clienti_loaded[i];
	}
	return null;
}
function ripristina_checkboxes(containerId, valoreSalvato) {
	var container = document.getElementById(containerId);
	if(!container) return;
	var colonIdx = String(valoreSalvato || '').indexOf(': ');
	var items = colonIdx >= 0 ? valoreSalvato.substring(colonIdx + 2).split(', ') : [];
	var rows = container.querySelectorAll('.det_check_row');
	rows.forEach(function(row) {
		var chk = row.querySelector('[id^="check_"]');
		var span = row.querySelector('span');
		if(!chk || !span) return;
		var testo = span.textContent.trim();
		var idx = chk.id.replace('check_', '');
		var varName = idx.indexOf('risp_') === 0 ? 'label_' + idx : 'label_risp_' + idx;
		if(items.indexOf(testo) >= 0) {
			chk.classList.remove('check_mid'); chk.classList.add('check_mid_ok'); chk.style.backgroundColor = '';
			span.classList.add('check_mid_label_ok'); span.classList.remove('check_mid_label');
			window[varName] = 1;
		} else {
			chk.classList.remove('check_mid_ok'); chk.classList.add('check_mid');
			span.classList.remove('check_mid_label_ok'); span.classList.add('check_mid_label');
			window[varName] = 0;
		}
	});
}

//funzione per far scorrere i form delle pratiche avanti e indietro con le frecce sinistra e destra 
function naviga_det_rubrica(direzione){
	if(!clienti_filtrati || clienti_filtrati.length === 0) return;
	var nuovo_idx = det_rubrica_idx_corrente + direzione;
	if(nuovo_idx < 0) nuovo_idx = clienti_filtrati.length - 1;
	if(nuovo_idx >= clienti_filtrati.length) nuovo_idx = 0;
	cliccato_nome_rubrica(nuovo_idx);
	setFormReadOnly();
}
//resetta i campi se con le frecce passo a un nuovo form e devo editare anche quello 
function resetDettaglioRubricaForm(){
	$("#det_top_section input[type='text'], #det_top_section textarea").val('');
	$('#provincia').val('');
	$('#det_canale_btn').html('Seleziona Contatto');
	$('#det_commerciale_btn').html('Seleziona');
	$('#det_bando_btn').html('Seleziona');
	$('#det_payment_btn').html('Seleziona');
	$('.check_mid_ok').removeClass('check_mid_ok').addClass('check_mid');
	$('.check_mid_label_ok').removeClass('check_mid_label_ok').addClass('check_mid_label');
	$('.det_check_row').show();
	$('#det_cons_gest').val('');
    $('#det_cons_cont').val('');
    $('#det_cons_annuo').val('');
	det_cons_gest = "";
    det_cons_cont = 0;
    det_cons_annuo = 0;
	label_risp_1 = 0;
	label_risp_2 = 0;
	label_risp_6 = 0; 
	label_risp_5 = 0;
	label_risp_3 = 0;
	label_risp_4 = 0;
	label_risp_imp_1 = 0;
	label_risp_imp_2 = 0;
	label_risp_imp_3 = 0;
	label_risp_imp_4 = 0;
	label_risp_imp_5 = 0;
	for(var i=0;i<=3;i++){
		var sq=document.getElementById('det_sq_'+i);
		if(sq){ sq.style.backgroundColor=''; sq.classList.remove('det_stato_sq_active'); }
	}
	stato_pratica_attivo=-1;
	$('#todo_lista').empty();
	$('#det_note').val('');
	$('#contatore_note').text('0' + '-' + max_caratteri_note_rub).css('color', '#999999');
}

function cliccato_nome_rubrica(idrubrica){
//	if(filtro_rub_attivo=="all"){
	crea_puls_dest_upload();
		carica_ora_server();

		indice_rubrica = idrubrica; 
		recupera_lista_file(indice_rubrica,"../uploads");
	console.log("----------------------------------");
	console.log("----------------------------------");
	console.log("----------------------------------");
	console.log(idrubrica);

	console.log("----------------------------------");
	console.log("----------------------------------");
	console.log("----------------------------------");

	//aggiorna_miniature_rub(idrubrica);
//funzione per prepopolare i campi del form dettaglio cliente se sono già presenti i dati
		$('#edit_doc_label').html('MODIFICA ATTIVA');
		resetDettaglioRubricaForm();
		det_rubrica_idx_corrente = idrubrica;
		// contatore posizione del cliente nell'elenco della rubrica
		$('#contatore_pos_rubrica').text((idrubrica + 1) + '/' + clienti_filtrati.length).show();
		var c = clienti_filtrati[idrubrica];
		if(c){
			// nome (c[1])
			$('#anagraf_nome').val(c[1] || '');
			// indirizzo (c[3])
			$('#anagraf_indirizzo').val(c[3] || '');
			// comune (c[4])
			$('#anagraf_comune').val(c[4] || '');
			// cap (c[6])
			$('#anagraf_cap').val(c[6] || '');
			// provincia (c[5]): popola le opzioni se necessario e imposta il valore
			popola_province();
			var prov = String(c[5] || '').trim().toUpperCase();
			$('#provincia').val(prov);
			if($('#provincia').val() !== prov){
				// opzione non presente, la aggiunge
				if(prov){ $('#provincia').append($('<option>',{value:prov,text:prov})); }
				$('#provincia').val(prov);
			}
			// email (c[8])
			$('#anagraf_email').val(c[8] || '');
			// telefono (c[19])
			$('#anagraf_tel').val(c[19] || '');
			// data (c[14])
			$('#anagraf_data').val(c[14] || '');
			// canale contatto (c[15])
			var canale = c[15] || '';
			if(canale && canale !== 'NULL' && canale !== 'null'){
				$('#det_canale_btn').html(canale);
			} else {
				$('#det_canale_btn').html('Seleziona Contatto');
			}
			// commerciale (c[16])
			var commerciale = c[16] || '';
			if(commerciale && commerciale !== 'NULL' && commerciale !== 'null'){
				$('#det_commerciale_btn').html(commerciale);
			} else {
				$('#det_commerciale_btn').html('Seleziona');
			}
			// metodo pagamento (c[23])
			var pagamento = c[23] || '';
			if(pagamento && pagamento !== 'NULL' && pagamento !== 'null'){
				$('#det_payment_btn').html(pagamento);
				aggiorna_colore_dropdown('#det_payment_btn', pagamento, '');
			} else {
				$('#det_payment_btn').html('Seleziona');
				aggiorna_colore_dropdown('#det_payment_btn', '', '');
			}
			// incentivo / bando (c[24])
			var bando = c[24] || '';
			if(bando && bando !== 'NULL' && bando !== 'null'){
				$('#det_bando_btn').html(bando);
				aggiorna_colore_dropdown('#det_bando_btn', bando, '');
			} else {
				$('#det_bando_btn').html('Seleziona');
				aggiorna_colore_dropdown('#det_bando_btn', '', '');
			}
			// campi azienda - partita IVA (c[7]), email referente (c[29]), pec (c[30]), codice univoco (c[31])
			console.log('Dati azienda:', c[7], c[29], c[30], c[31]);
			console.log('Array completo:', c);
			$('#anagraf_piva').val(c[7] || '');
			var refmail = (c[29] || '').replace(';');
			var idx = refmail.indexOf(';');
			$('#anagraf_emailref').val(idx >= 0 ? refmail.substring(0, idx).trim() : refmail);
			$('#det_mail_referenti').val(idx >= 0 ? refmail.substring(idx + 1).trim() : '');
			$('#anagraf_pec').val(c[30] || '');
			$('#anagraf_codice_univoco').val(c[31] || '');
			// campi consumi - c[17]=consumo_kw_annuo, c[18]=potenza_contatore, c[20]=Gestore_rete
			$('#det_cons_annuo').val(c[17] || '');
			$('#det_cons_cont').val(c[18] || '');
			$('#det_cons_gest').val(c[20] || '');
			// note (c[10])
			var note = c[10] || '';
			$('#det_note').val(note);
			if ($('#det_note').val==""){
				$('#det_note').getNiceScroll().remove();
				}else{
					$("#det_note").niceScroll({
						  cursorcolor:"rgb(255, 0, 0)",
						  cursorborder: "0px none #000",
						  cursorborderradius: "0px",
						  cursoropacitymax:"0.5",
						  cursorwidth:"11px",
						  autohidemode:"true",
						  railoffset: {top:0,left:9},
						  horizrailenabled: "false",
						  background:"rgba(255,255,255,0.11)",
						  //background:'#E5E9E7'
						  callback: function() {
							  $("#ascrail2000").css({"width": "0px", "top": "40px"});
						  }
						});

			}
			$('#contatore_note').text((note.length) + '-' + max_caratteri_note_rub).css('color', '#999999');

			// stato pratica (c[11]: '0','1','2','3')
			var sp = parseInt(c[11]);
			var stato_pratica_mai_impostato = isNaN(sp) || sp < 0;
			if(!stato_pratica_mai_impostato){
				seleziona_stato_pratica(sp, true);
			} else {
				// nessuno stato: reset
				for(var i=0;i<=3;i++){
					var sq=document.getElementById('det_sq_'+i);
					if(sq){ sq.style.backgroundColor=''; sq.classList.remove('det_stato_sq_active'); }
				}
				stato_pratica_attivo=-1;
			}
			// tipo cliente (c[2])
			var tc = String(c[2] || 'privato').toLowerCase();
			seleziona_tipo_cliente(tc, true);
			// privacy (c[25])
			confirm_privacy = (parseInt(c[25]) === 1) ? 1 : 0;
			aggiornaCheckboxPrivacy();

			// Carica i valori per i checkbox efficientamento e impianti da c[21] e c[22]
			// Il formato è "Efficientamento: cappotto, infissi" / "Impianti: impianto fv, pompa di calore"
			var effRaw = c[21] || '';
			var impRaw = c[22] || '';
			var effMap = {
				'cappotto': 'risp_1',
				'isol. tetto': 'risp_2',
				'sottotetto': 'risp_6',
				'infissi': 'risp_5',
				'oscuranti': 'risp_3',
				'schermat. solare': 'risp_4'
			};
			var impMap = {
				'impianto fv': 'imp_1',
				'colonnina ric.auto': 'imp_2',
				'batterie accumulo': 'imp_3',
				'caldaia ibrida': 'imp_4',
				'pompa di calore': 'imp_5'
			};
			if(effRaw){
				var colonIdx = effRaw.indexOf(': ');
				var effValues = (colonIdx >= 0 ? effRaw.substring(colonIdx + 2) : effRaw).split(',').map(function(v){ return v.trim().toLowerCase(); });
				for(var key in effMap){
					if(effValues.indexOf(key) !== -1){
						var chk = document.getElementById('check_' + effMap[key]);
						if(chk){
							chk.classList.remove('check_mid'); chk.classList.add('check_mid_ok'); chk.style.backgroundColor = '';
							var lbl = document.getElementById('label_' + effMap[key]);
							if(lbl){ lbl.classList.remove('check_mid_label'); lbl.classList.add('check_mid_label_ok'); }
							window['label_' + effMap[key]] = 1;
						}
					}
				}
			}
			if(impRaw){
				var colonIdx2 = impRaw.indexOf(': ');
				var impValues = (colonIdx2 >= 0 ? impRaw.substring(colonIdx2 + 2) : impRaw).split(',').map(function(v){ return v.trim().toLowerCase(); });
				for(var key in impMap){
					if(impValues.indexOf(key) !== -1){
						var chk2 = document.getElementById('check_' + impMap[key]);
						if(chk2){
							chk2.classList.remove('check_mid'); chk2.classList.add('check_mid_ok'); chk2.style.backgroundColor = '';
							var lbl2 = document.getElementById('label_risp_' + impMap[key]);
							if(lbl2){ lbl2.classList.remove('check_mid_label'); lbl2.classList.add('check_mid_label_ok'); }
							window['label_risp_' + impMap[key]] = 1;
						}
					}
				}
			}
		}
		// il div stato pratica resta sempre visibile, anche se lo stato non è mai stato impostato
		$("#stato_pratica").show();
		setFormReadOnly();
		aggiorna_stato_pulsante_salva();
		$("#modal_one").fadeIn(170);
		$("#modal_one").addClass("all_blur");
		$('#delete_consumer').show();
		$('#print_form').show();
		$('#edit_lock').show();
		$('#icon_printer').show();
	if (filtro_rub_attivo!="all"){
		$('#filter_icon').show();
	}else{
		$('#filter_icon').hide();
	}

		$("#middle_btm_bar").stop(true, true).fadeOut(tempo_transizioni);
        $("#dettaglio_rubrica").fadeIn(tempo_transizioni,function() {  $("#_det_note").getNiceScroll().resize();});;
		$("#dock_rubrica").fadeIn(tempo_transizioni);
			if (anagraf_new){
				$("#det_col_commessa").hide()
			}else{ $("#det_col_commessa").show()}

	if (!dispositivo_mobile()){
		if(!aperto_dettaglio_rubrica){
		$('#container_dock_rubrica').delay(tempo_transizioni).css("z-index",10010).animate({ marginLeft: "-527px" }, 300,function(){
				$("#container_dock_rubrica").niceScroll({
						  cursorcolor:"rgb(97 97 97)",
						  cursorborder: "0px none #000",
						  cursorborderradius: "0px",
						  cursoropacitymax:"0.5",
						  cursorwidth:"9px",
						  autohidemode:"true",
						  railoffset: {top:0,left:11},
						  horizrailenabled: "false",
						  background:"rgba(255,255,255,0.07)",
						  //background:'#E5E9E7'
						  callback: function() {
							  $("#ascrail2000").css({"width": "0px", "top": "40px"});
						  }						
				});
			
		})

	   }else if(anagraf_new==1){
		$('#container_dock_rubrica').delay(tempo_transizioni).css("z-index",10010).animate({ marginLeft: "-527px" }, 300,function(){
				$("#container_dock_rubrica").niceScroll({
						  cursorcolor:"rgb(97 97 97)",
						  cursorborder: "0px none #000",
						  cursorborderradius: "0px",
						  cursoropacitymax:"0.5",
						  cursorwidth:"9px",
						  autohidemode:"true",
						  railoffset: {top:0,left:11},
						  horizrailenabled: "false",
						  background:"rgba(255,255,255,0.07)",
						  //background:'#E5E9E7'
						  callback: function() {
							  $("#ascrail2000").css({"width": "0px", "top": "40px"});
						  }						
				});
			
		})

	   }

		
			
	}else{
        $("#container_dock_rubrica_mobile").delay(tempo_transizioni/2).fadeIn(tempo_transizioni).animate({bottom: 11},{ duration: tempo_transizioni, queue: true });;
		$("#container_dock_rubrica_mobile").niceScroll({
						  cursorcolor:"rgba(53,255,0,1.00)",
						  cursorborder: "0px none #000",
						  cursorborderradius: "0px",
						  cursoropacitymax:"0.5",
						  cursorwidth:"5px",
						  autohidemode:"true",
						  railoffset: {top:7,left:0},
						  horizrailenabled: "true",
						  background:"rgba(255,255,255,0.11)",
			railpadding: {top:0, right: 0, left: 0, bottom: -7},
						  //background:'#E5E9E7'
						  callback: function() {
							  $("#ascrail2000").css({"width": "0px", "top": "40px"});
						  }
						});
	}
		aperto_dettaglio_rubrica=1;
	 	document.forms.esportazione.id.value= clienti_filtrati[idrubrica][0];
       console.log(document.forms.esportazione.id.value);
	   document.forms.esportazione.tipo_dati.value= "modifica";
       console.log(document.forms.esportazione.tipo_dati.value);
//}else{
//	
//}


}
//apri dettaglio per creare nuovo cliente 
function nuovo_cliente(){
	formInEditMode = true;
	anagraf_new = 1;
	if (anagraf_new){$("#det_col_commessa").hide()}
	$('#contatore_pos_rubrica').text('').hide();
	$("#edit_doc_label").show().html("NUOVO CLIENTE");
	$('#svg_clip_top_rub').attr('fill', '#1f791f'); 
	$("#det_top_section input[type='text'], #det_top_section textarea").val('');
	$("#det_top_section input[type='checkbox']").prop('checked', false);
	$("#det_tipo_btn").html('&#9660; Privato');
	seleziona_tipo_cliente('privato', true);
	$("#det_canale_btn").html('Seleziona Contatto');
	$("#det_commerciale_btn").html('Seleziona');
	$("#provincia option:first").val('').text('Prov');
	$("#provincia").val('');
	$("#det_note").val('');
	$('#det_cons_gest').val('');
	$('#det_cons_cont').val('');
	$('#det_cons_annuo').val('');
	$('.check_mid_ok').removeClass('check_mid_ok').addClass('check_mid');
	$('.check_mid_label_ok').removeClass('check_mid_label_ok').addClass('check_mid_label');
	$('#contatore_note').text('0' + '-' + max_caratteri_note_rub).css('color', '#999999');
	$('#det_note').getNiceScroll().resize();
	$('#det_bando_btn').html('Seleziona');
	$('#det_payment_btn').html('Seleziona');
	var oggi = new Date();
	var gg = String(oggi.getDate()).padStart(2,'0');
	var mm = String(oggi.getMonth()+1).padStart(2,'0');
	var aaaa = oggi.getFullYear();
	$('#anagraf_data').val(gg+'/'+mm+'/'+aaaa);
	aggiorna_colore_dropdown('#provincia', '', '#bbbbbb');
	aggiorna_colore_dropdown('#det_canale_btn', '', '');
	aggiorna_colore_dropdown('#det_commerciale_btn', '', '');
	aggiorna_colore_dropdown('#det_bando_btn', '', '');
	aggiorna_colore_dropdown('#det_payment_btn', '', '');
	$("#modal_one").fadeIn(170); 
	document.forms.esportazione.tipo_dati.value= "nuovo";  
    console.log(document.forms.esportazione.tipo_dati.value);
	anag_nome_ok = 0;
	anag_indirizzo_ok = 0;
	anag_comune_ok = 0;
	anag_cap_ok = 0;
	anag_email_ok = 0;
	anag_telefono_ok = 0;
	setFormEditable();
	$("#edit_doc_label").show().html("NUOVO CLIENTE");
	// Colora di rosso i campi obbligatori
	$('#anagraf_nome, #anagraf_indirizzo, #anagraf_comune, #anagraf_email, #anagraf_tel').css("background-color",mandatory_fields_color).css("color","#eee"); 
	// Attiva controllo email in tempo reale per togliere il rosso quando il formato è corretto
	$('#anagraf_email, #anagraf_emailref').on('input.nuovoCliente', function() { controlla_mail(this.id); });
	// Attiva controllo indirizzo: se campo non vuoto, togli il rosso
	$('#anagraf_indirizzo').on('input.nuovoCliente', function() { controlla_indirizzo(this.id); });
	// Attiva controllo comune: se campo non vuoto, togli il rosso
	$('#anagraf_comune').on('input.nuovoCliente', function() { controlla_comune(this.id); });
	// Attiva controllo nome: se campo non vuoto, togli il rosso
	$('#anagraf_nome').on('input.nuovoCliente', function() { controlla_nome(this.id); });
	// Attiva controllo telefono: se campo non vuoto, togli il rosso
	$('#anagraf_tel').on('input.nuovoCliente', function() { controlla_telefono(this.id); });

	// Reset stato pratica: nessun valore selezionato
	for(var i=0;i<=3;i++){
		var sq=document.getElementById('det_sq_'+i);
		if(sq){ sq.style.backgroundColor=''; sq.classList.remove('det_stato_sq_active'); }
	}
	//aggiorna_stato_pulsante_salva();
		stato_pratica_attivo=-1;
	$("#stato_pratica").show();
	$('#btn_salva_pratica').hide();
	// Verifica e imposta stato pratica (mostra div se campi obbligatori compilati)
	controlla_stato_pratica();

	
	
	$("#modal_one").addClass("all_blur"); 
	aperto_dettaglio_rubrica=1;
	$('#delete_consumer').hide();
	$('#print_form').hide();
	$('#filter_icon').hide();
	$('#edit_lock').hide();
	$('#icon_printer').hide();
	spegni_frecce();
	$("#dettaglio_rubrica").fadeIn(tempo_transizioni);

    if(typeof caricaRubrica === 'function'){ caricaRubrica(); }
	$("#middle_btm_bar").stop(true, true).fadeOut(tempo_transizioni);
	confirm_privacy = 0;
	aggiornaCheckboxPrivacy();
	// stato pratica sempre visibile per il nuovo cliente, sfondo #333
	$("#stato_pratica").css({"display":"block","background-color":"#333"});
}
/////////////////////////////////////////////////////////////////////////////
function chiudi_dettaglio_rubrica(){
		confirm_privacy = 0;
		aggiornaCheckboxPrivacy();
		$("#modal_one").fadeOut(170,function() {
		$("#modal_one").removeClass("all_blur")
		setFormReadOnly();
		});
		aperto_dettaglio_rubrica=0;
		anagraf_new = 0;
		anag_nome_ok = 0;
		anag_indirizzo_ok = 0;
		anag_comune_ok = 0;
		anag_cap_ok = 0;
		anag_email_ok = 0;
		anag_telefono_ok = 0;
	chiudi_coda_file();
		$('#anagraf_email, #anagraf_emailref, #anagraf_indirizzo, #anagraf_cap, #anagraf_comune, #anagraf_nome, #anagraf_tel').off('input.nuovoCliente');
		$('#filter_icon').show();
		$('#btn_salva_pratica').hide();
		$('#btn_salva_pratica_ghost').show();
	
        $("#dettaglio_rubrica").fadeOut(tempo_transizioni/2,function(){
			$('#print_form').show();
			$('#edit_lock').show();
			$('#icon_printer').show();
			$('#delete_consumer').show();
			if(sidebar_button_attivo=="rubrica"){
				$("#middle_btm_bar").stop(true, true).fadeIn(tempo_transizioni);
			}
		});
	        $("#dock_rubrica").fadeOut(1);
        $("#container_dock_rubrica_mobile").fadeOut(1).css("bottom",-83);
	//$('#container_dock_rubrica').getNiceScroll().remove();
	$('#container_dock_rubrica').css("z-index",-1).animate({ marginLeft: "-1570px" }, 77)
	if(formInEditMode){
		toggleFormEditMode();
	}

}		
		
		
/////////////////////////////////////////////////////////////////////////////
 
//genera lettere usando il codice ASCII
function renderFiltriContratto(){
	var filtriContratto = ` 

			<div id='filtraggio_rubrica'> 
            <div id='ico_extra' class='filtro_icone_cliente' style='top: 7px; left: 7px; border-radius: 4px' onClick='popola_Rubrica("solo_cliente");'></div> 
			<div id='ico_cer' class='filtro_icone_cliente' style='top: 7px; left: 51px; border-radius: 4px; background-position: 3px -73px' onClick='popola_Rubrica("solo_cer")'></div> 
			<div id='ico_azienda' class='filtro_icone_cliente' style='top: 7px; left: 95px; border-radius: 4px; background-position: 3px -35px;'onClick='popola_Rubrica("solo_azienda")'></div>   
			<div id='ico_casa' class='filtro_icone_cliente' style='top: 7px; left: 139px; border-radius: 4px; background-position: 3px -300px' onClick='popola_Rubrica("solo_pubblico")'></div> 
			<div id='titolo_stato_pratica' style='top: 12px; left: 7px;' class='_non_selezionabile'>Stato pratica</div> 
            <div id='pratica_avvio' class='filtro_icone_preventivo _non_selezionabile' style= 'top: 7px; left: 322px; background-color: #9c9292; border: 1px solid black;' data-tooltip='Pratica avviata' onClick='popola_Rubrica("contratto_0")'></div> 
            <div id='pratica_rifiutata' class='filtro_icone_preventivo _non_selezionabile' style= 'top: 7px; left: 366px;  background-color: #c30a0a; border: 1px solid black;' data-tooltip='Pratica rifiutata' onClick='popola_Rubrica("contratto_2")'></div> 
            <div id='pratica_elaborata' class='filtro_icone_preventivo _non_selezionabile' style= 'top: 7px; left: 410px;  background-color: #f5be0f; border: 1px solid black;' data-tooltip='Pratica in elaborazione' onClick='popola_Rubrica("contratto_1")'></div> 
            <div id='pratica_confermata' class='filtro_icone_preventivo _non_selezionabile' style= 'top: 7px; left: 454px; background-color: #29c929; border: 1px solid black;' data-tooltip='Pratica confermata' onClick='popola_Rubrica("contratto_3")'></div>
            <div id='titolo_provincia' style= 'top: 12px; left: 365px;' class='_non_selezionabile'>Provincia</div> 
            <div id='ico_provincia' class='filtro_provincia' style= 'top: 7px; left: 607px; border: 1px solid grey;' onClick='apri_popup_province()'></div>  
			</div> 	   
            `;     
	$("#middle_btm_bar").html(filtriContratto).hide();    
} 
function renderFiltriContratto_(){
	var filtriContratto = `
			<div class='filtri_clienti'>
				<div class='titolo_stato_cliente'>Stato cliente</div> 
				<div class='filtro_icone_cliente'>
						<div id='flt_cliente' onclick='popola_Rubrica("solo_cliente")' class='icona_testo'>C</div>
						<div id='flt_azienda' onclick='popola_Rubrica("solo_cer")' class='ico_azienda'></div>
						<div id='flt_casa' onclick='popola_Rubrica("solo_azienda")' class='ico_casa'></div>		
			</div> 
			</div> 
            <div class='filtri_preventivo'>  
				<div class='titolo_stato_preventivo'>Stato preventivo</div>
				<div class='filtro_icone_preventivo'>
						<div id='flt_contratto_0' onclick='popola_Rubrica("contratto_0")' class='preventivo_icona_grigio' style='background-color:#9c9292'></div>
						<div id='flt_contratto_1' onclick='popola_Rubrica("contratto_1")' class='preventivo_icona_giallo' style='background-color:#fdb202'></div>
						<div id='flt_contratto_2' onclick='popola_Rubrica("contratto_2")' class='preventivo_icona_rosso' style='background-color:#d70e0e'></div>
						<div id='flt_contratto_3' onclick='popola_Rubrica("contratto_3")' class='preventivo_icona_verde' style='background-color:#29c929'></div>
			</div>    
			</div> 
            <div class='titolo_provincia'>Provincia</div>
            <div id='filtro_provincia' onclick='popola_Rubrica("rubrica_provincia")' class='elenco_provincia' style='background-color:#8d8d8df5'></div>
            `;   
	$("#middle_btm_bar").html(filtriContratto).hide(); 
} 
//////////////////////////////////////////////////////////////////////////
function alfabeto(){
	var letters="";
	var p_sx=0;
for (x=65 ; x<=90; x++){    
	var letteras="a"; 
	letters=letters+"<div id='lt"+x+"' onclick='popola_Rubrica(\"" + String.fromCharCode(x) + "\")' class='filtro_rubrica_letter filtro_rubrica_letter_up' style='left: "+p_sx+"px'>"+String.fromCharCode(x)+"</div>";
	p_sx+=31.92;
	//letters.push(String.fromCharCode(x));
} 

	// sistemo la classe filtro_rubrica_letter altezza e line height
	$("#rubrica_filtro .filtro_rubrica_letter").css("height",parseInt($("#rubrica_filtro").css("height"))).css("line-height",parseInt($("#rubrica_filtro").css("height")))
	$("#rubrica_filtro").html(letters);
}
		
		
		

/////////////////////////////////////////////////////////////////////////////
		var filtro_lettera_corrente="all";
		var filtro_contratto_corrente=""; // all, 0, 1
		
		
		
/////////////////////////////////////////////////////////////////////////////
///////////////
		var colonna_ordinamento=1
		var modo_ordinamento="asc"
		//clienti.sort(ordinamento_array)
function ordinamento_array(a, b) {
    if (a[colonna_ordinamento] === b[colonna_ordinamento]) {
        return 0;
    }
    else {
		if (modo_ordinamento=="asc"){
            return (a[colonna_ordinamento] < b[colonna_ordinamento]) ? -1 : 1;
		}
		if (modo_ordinamento=="disc"){
            return (a[colonna_ordinamento] > b[colonna_ordinamento]) ? -1 : 1;
		}
    }		
}
//////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////
		
function filtrarubrica(letterainizio){
	clienti_filtrati=[];
	//console.log(letterainizio)
	if (letterainizio=="all"){
		clienti_filtrati=clienti;
		filtro_rub_attivo="all"; 
		return;
	}else if(letterainizio == 'contratto_0' ){
		//se contratto è 0
    		for(x=0; x<=clienti.length-1; x++) {
			if(clienti[x][11] == "0"){
		    clienti_filtrati.push(clienti[x]);}
			 }
		filtro_rub_attivo='contratto_0';
	}else if(letterainizio == 'contratto_1' ){  
		//se contratto è 0
    		for(x=0; x<=clienti.length-1; x++) {
			if(clienti[x][11] == "1"){
		    clienti_filtrati.push(clienti[x]);}
			 }		filtro_rub_attivo="contratto_1";
	}else if(letterainizio == 'contratto_2' ){   
		//se contratto è 0
    		for(x=0; x<=clienti.length-1; x++) {
			if(clienti[x][11] == "2"){ 
		    clienti_filtrati.push(clienti[x]);}
			 }		filtro_rub_attivo="contratto_2";
	}else if(letterainizio == 'contratto_3'){
		for(x=0; x<=clienti.length-1; x++) {

			if(clienti[x][11] == "3"){
				clienti_filtrati.push(clienti[x]);
			} 
		}
		filtro_rub_attivo=letterainizio;
	}else if(letterainizio == 'solo_cer' ){
		for(x=0; x<=clienti.length-1; x++) {
			if(String(clienti[x][2]).toLowerCase() == "pubblico"){
				clienti_filtrati.push(clienti[x]);
			}
		}
//i filtri del tipo cliente ora filtrano per tipo_cliente anzichè azpr. Il formato è enum, i campi privato, azienda o pubblico, che sta per cer	
		filtro_rub_attivo='solo_cer';
	}else if(letterainizio == 'solo_cliente' ){
		for(x=0; x<=clienti.length-1; x++) {
			if(!clienti[x][2] || String(clienti[x][2]).toLowerCase() == 'privato'){
				clienti_filtrati.push(clienti[x]);
			}
		}
		filtro_rub_attivo='solo_cliente';
	}else if(letterainizio == 'solo_azienda' ){
		for(x=0; x<=clienti.length-1; x++) {
			if(String(clienti[x][2]).toLowerCase() == 'azienda'){
				clienti_filtrati.push(clienti[x]);
			}
		}
		filtro_rub_attivo='solo_azienda';
	}else if(letterainizio == 'solo_pubblico' ){
		for(x=0; x<=clienti.length-1; x++) {
			if(String(clienti[x][2]).toLowerCase() == 'pubblico'){
				clienti_filtrati.push(clienti[x]);
			}
		}
		filtro_rub_attivo='solo_pubblico';
	} 	else{
		for(x=0; x<=clienti.length-1; x++) {
		if(letterainizio.toUpperCase()== clienti[x][1].substring(0,1).toUpperCase()){
		//console.log(clienti[x][1].substring(0,1))	
		clienti_filtrati.push(clienti[x]);
	 filtro_rub_attivo=letterainizio;
	}}
} 
	
	}
		
/////////////////////////////////////////////////////////////////////////////
		function verifica_lettere_alfabeto(){
		for(x=65; x<=90; x++) {
		lettere_iniziali[x]= 0;	
		}
		for(x=0; x<=clienti.length-1; x++) {
		lettere_iniziali[clienti[x][1].toUpperCase().charCodeAt(0)] = clienti[x][1].toUpperCase().charCodeAt(0);
		} 
		for(xx=65; xx<=lettere_iniziali.length-1; xx++) {
		if(lettere_iniziali[xx]==0){ 
				//console.log("#lt" + xx) 
		$("#lt"+xx).removeClass("filtro_rubrica_letter").removeClass("filtro_rubrica_letter_up");	
		$("#lt"+xx).addClass("filtro_rubrica_letter_neutral");	
		}
		} 
		}
/////////////////////////////////////////////////////////////////////////////
		
// ---- main071.php righe 3818-3833
function attiva_ricerca() {
    const input = document.getElementById("search");
    if (!input) return;

    input.addEventListener("input", ({ target }) => {
        const query = normalizza(target.value);
        clienti_filtrati = query === "" ? [...clienti] : clienti.filter(c => 
            [c[1], c[3], c[5]].some(campo => normalizza(campo).includes(query))
        );
        mostra_risultati(); 
    });
}
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
///funzione per attivare ricerca magazzino 
// ---- main071.php righe 3861-3998
function mostra_risultati() {
    const html = clienti_filtrati.map((c, i) => {
        const tipo_cl = String(c[2]).toLowerCase();
        const y_icona = (tipo_cl=='pubblico') ? '-73px' : (tipo_cl=='azienda' ? '-35px' : '1px');
        const filtro_tipo = (tipo_cl=='pubblico') ? 'solo_cer' : (tipo_cl=='azienda' ? 'solo_azienda' : 'solo_cliente');
        return `
            <div class='rubrica_riga' onClick='cliccato_nome_rubrica(${i})'>
                <div class='icona_tipo_cliente' onClick='event.stopPropagation();popola_Rubrica("${filtro_tipo}")' style='background-position: 3px ${y_icona}'></div>
                <div class='rubrica_nome'>${c[1].toUpperCase()}</div> 
                <div class='rubrica_stato_pratica' style='background-color:${colori_stato_pratica[String(c[11]).toLowerCase()] || "#9c9292"}'></div>
                <div class='rubrica_indirizzo'>${c[3]}</div>
                <div class='rubrica_provincia'>${c[5]}</div> 
            </div>`;  
    }).join(""); 

    $("#rubrica_nomi").html(html); 
	
	$("#container_rubrica").addClass("ombra_elementi").fadeIn(tempo_transizioni); 
    $("#rubrica_filtro, #middle_btm_bar").delay(tempo_transizioni).fadeIn(tempo_transizioni);
    verify_status_practice();
}

//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
// POPUP SELEZIONE PROVINCIA
//////////////////////////////////////////////////////////////////////////////
var provincia_popup_selezionata = "";

function iniettaHTMLPopupProvince() {
    if (document.getElementById("overlay_province")) return;
    var html = `
        <div id="overlay_province">
            <div id="popup_province">
                <div id="popup_province_header">
                    <span id="popup_province_chiudi" onclick="chiudi_popup()">&#x2715;</span>
                </div>
                <div id="popup_province_lista"></div>
            </div>
        </div>`; 
    $("body").append(html);
    $("#overlay_province").on("click", function(e) {
        if ($(e.target).is("#overlay_province")) { chiudi_popup(); }
    });
}
//mette insieme nei risultati tutte le province presenti in elenco 
function raccogli_province() { 
    var province = [];
    for (var i = 0; i < clienti.length; i++) {
        var p = String(clienti[i][5] || "").trim().toUpperCase();
        if (p && province.indexOf(p) === -1) {
            province.push(p);
        }
    }
    return province.sort(); 
}
//apre il pop up delle province  
function apri_popup_province() {
    iniettaHTMLPopupProvince();
    var province = raccogli_province();
    var lista = "<div class='popup_provincia_voce_tutti' onclick='seleziona_provincia(\"\")'> Tutte le province </div>";
    for (var i = 0; i < province.length; i++) {
        var sel = (province[i] === provincia_popup_selezionata) ? " prov_selezionata" : "";
        lista += "<div class='popup_provincia_voce" + sel + "' onclick='seleziona_provincia(\"" + province[i] + "\")'>" + province[i] + "</div>";
    } 
    $("#popup_province_lista").html(lista);
    
    // Ensure the popup is tall enough to show scrollbar
    var contentHeight = $("#popup_province_lista")[0].scrollHeight;
    var maxHeight = 280;
    
    // Remove any existing nicescroll instance
    $("#popup_province_lista").getNiceScroll().remove();
    
    // Initialize nicescroll with red scrollbar
    $("#popup_province_lista").niceScroll({
        cursorcolor:"rgb(255, 0, 0)", 
        cursorborder: "0px none #000",
        cursorborderradius: "0px", 
        cursorwidth: "8px",
        autohidemode: false,
        background: "rgba(0, 0, 0, 0.3)",
        spacebarenabled: false,
        railpadding: { top: 0, right: 2, left: 0, bottom: 0 },
        zindex: 9999
    });
    
    // Force scrollbar to be visible if content is scrollable
    setTimeout(function() {
        var nicescroll = $("#popup_province_lista").getNiceScroll();
        nicescroll.resize();
        if (contentHeight > maxHeight) {
            nicescroll.show();
        }
    }, 200);
    
    $("#overlay_province").fadeIn(177); 
}
//chiude il pop up quando non richiesto 
function chiudi_popup() {
	
    $("#overlay_province").fadeOut(177);
	
} 
//seleziona per aprire popup province
function seleziona_provincia(sigla) {
    provincia_popup_selezionata = sigla;
    if (sigla === "") { 
        /*clienti_filtrati = clienti.filter(function(c) {
            return String(c[5] || "").trim() !== "";
        }).sort(function(a, b) {
            return String(a[1]).localeCompare(String(b[1]));
        }); */
    popola_Rubrica('all')
	// Resetta colore icona provincia quando si seleziona "tutte le province"
    $("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
    // Resetta background container_rubrica
    $("#container_rubrica").css("background-color","#878787");
    filtro_rub_attivo = "all";
    chiudi_popup();
    return;
	} else {
        clienti_filtrati = clienti.filter(function(c) {
            return String(c[5] || "").trim().toUpperCase() === sigla;
        });
        // Illumina icona provincia del colore rgb(7 184 196) quando una provincia è selezionata
        $("#ico_provincia").css("background-color", "rgb(7, 184, 196)"); 
        // Illumina anche il background del container_rubrica di azzurro
        $("#container_rubrica").css("background-color", "rgb(7, 184, 196)");
        // Resetta lettere selezionate e icone cliente
        for(var i=65;i<=90;i++){ $("#lt"+i).removeClass("filtro_rubrica_letter_selected").addClass("filtro_rubrica_letter_up"); }
        $(".filtro_icone_cliente").css("background-color","#1a1a1a");
        // Imposta filtro attivo per tracciare che è attivo il filtro provincia
        filtro_rub_attivo = "provincia_" + sigla;
    }
    mostra_risultati();
    chiudi_popup();
}
// popola la lista ma salta tutti gli elementi che iniziano con hidden alla posizione 1 dell'array lista_chat 
// ---- main071.php righe 4041-4338
function seleziona_tipo(tipo){
	document.getElementById('det_tipo_btn').innerHTML = tipo;
	document.getElementById('det_tipo_dropdown').style.display = 'none';
}
//////////////////////////////////////////////////////////////////////////////
function toggle_canale(){
	if(!formInEditMode){ return; }
	var dd = document.getElementById('det_canale_dropdown');
	var isOpen = (dd.style.display === 'block');
	close_dropdowns();
	if (!isOpen) {
		dd.style.display = 'block';
		$("#det_canale_wrap").css("z-index", 3500);
		$("#det_cell_label").css({"z-index": 3500, "position": "absolute"});
	}
}
//funzione per estrarre testo della dropdown con il colore esatto 
function estrai_testo_btn(id, default_val){
	var raw = (document.getElementById(id) || {}).innerHTML || '';

	var testo = raw.replace(/&#9660;/g,'').replace(/▼/g,'').trim();
	return (testo === default_val || testo === '') ? '' : testo;
}
//funzione per aggiornare il colore della dropdown 
function aggiorna_colore_dropdown(selettore, valore, coloreVuoto){
	if(valore && String(valore).trim() !== ""){
		$(selettore).css({'color': '#00eeff', '-webkit-text-fill-color': '#00eeff'});
	}else{
		$(selettore).css({'color': coloreVuoto || '', '-webkit-text-fill-color': coloreVuoto || ''});
	}
}
//////////////////////////////////////////////////////////////////////////////

function seleziona_canale(canale){ 
	if(!formInEditMode){ return; }
	document.getElementById('det_canale_btn').innerHTML = canale;
	document.getElementById('det_canale_dropdown').style.display = 'none';
	$("#det_canale_wrap").css("z-index", "");
	$("#det_cell_label").css("z-index", "");
	det_canale_btn = canale;
	aggiorna_colore_dropdown('#det_canale_btn', canale, '');
}
//////////////////////////////////////////////////////////////////////////////
function toggle_tipo_cliente(){
	if(!formInEditMode){ return; }
	var dd = document.getElementById('anagraf_tipo_cliente_dropdown');
	dd.style.display = (dd.style.display === 'block') ? 'none' : 'block';
}
//////////////////////////////////////////////////////////////////////////////
function seleziona_tipo_cliente(tipo, forza){
	if(!formInEditMode && !forza){ return; }
	var posMap = {
		'privato':  '3px 1px',
		'azienda':  '3px -35px',
		'pubblico': '3px -73px',
		'extra':    '3px -300px'
	};
	var icona = document.getElementById('anagraf_tipo_cliente_icona');
	if(icona) icona.style.backgroundPosition = posMap[tipo] || '3px 1px';
	document.getElementById('anagraf_tipo_cliente_dropdown').style.display = 'none';
	if (tipo=="privato"){
		$('#det_top_section').css("height",213);
		$('#container_dati_azienda').fadeOut(velocit_anim_sidebar/5)
		$('#det_middle_section').css("top",227);
		$('#det_note_section').css("top",593);
		    $('#dettaglio_rubrica').css("height",791);
		    $('#container_dock_rubrica').css("height",791);
			$('#stato_pratica').css("top",593);
			$('#btn_salva_pratica').css("top",712);
			$('#btn_salva_pratica_ghost').css("top",712);
		
		$('#extra_frame').show();
		$('#bandi_energia').hide(); 
		
		
//		$('#det_top_section').animate({ height: 175 }, velocit_anim_sidebar/3);
//		$('#container_dati_azienda').slideUp(velocit_anim_sidebar/3)
//		$('#det_middle_section').animate({ top: 196 }, velocit_anim_sidebar/3);
//		$('#det_note_section').animate({ top: 570 }, velocit_anim_sidebar/3);
//		    $('#dettaglio_rubrica').animate({ height: 777}, velocit_anim_sidebar/3); 
//		    $('#container_dock_rubrica').animate({ height: 777}, velocit_anim_sidebar/3); 
//			$('#stato_pratica').animate({ top: 570}, velocit_anim_sidebar/3);
//			$('#btn_salva_pratica').animate({ top: 688}, velocit_anim_sidebar/3);
//			$('#btn_salva_pratica_ghost').animate({ top: 688}, velocit_anim_sidebar/3);
//		
//		$('#extra_frame').show();
//		$('#bandi_energia').hide(); 
		
		
	}else if(tipo=="azienda"){ 
		$('#det_top_section').css("height",213);
		$('#container_dati_azienda').fadeIn(velocit_anim_sidebar/5)
		$('#det_middle_section').css("top",227);
		$('#det_note_section').css("top",593);
		    $('#dettaglio_rubrica').css("height",791);
		    $('#container_dock_rubrica').css("height",791);
			$('#stato_pratica').css("top",593);
			$('#btn_salva_pratica').css("top",712);
			$('#btn_salva_pratica_ghost').css("top",712);
		
		$('#extra_frame').show(); 
		$('#bandi_energia').show(); 
//		$('#det_top_section').animate({ height: 225 }, velocit_anim_sidebar/3);
//		$('#container_dati_azienda').slideDown(velocit_anim_sidebar/3)
//		$('#det_middle_section').animate({ top: 245 }, velocit_anim_sidebar/3);
//		$('#det_note_section').animate({ top: 617 }, velocit_anim_sidebar/3);
//			$( "#container_dock_rubrica" ).animate({height: 825}, velocit_anim_sidebar/3, function() {})
//			$( "#dettaglio_rubrica" ).animate({height: 825}, velocit_anim_sidebar/3, function() {
//					cambio_dimensione_finestra();
//				
//				  });
//			$('#stato_pratica').animate({ top: parseInt(570)+48}, velocit_anim_sidebar/3);
//			$('#btn_salva_pratica').animate({ top: parseInt(688)+48}, velocit_anim_sidebar/3);
//			$('#btn_salva_pratica_ghost').animate({ top: parseInt(688)+48}, velocit_anim_sidebar/3);
//		$('#extra_frame').show(); 
//		$('#bandi_energia').show(); 
		
		
	}else if(tipo=="pubblico"){ 
		$('#extra_frame').show();
		$('#bandi_energia').hide();
	}else if(tipo=="extra"){ 
		$('#extra_frame').show(); 
		$('#bandi_energia').hide();
	}
	tipo_cliente=tipo;
	cambio_dimensione_finestra();
}
var colori_stato_pratica_sq = {0:'#9c9292', 1:'#f5be0f', 2:'#c30a0a', 3:'#29c929'};
function seleziona_stato_pratica(idx, forza){
	if(!formInEditMode && !forza){ return; }
	for(var i=0;i<=3;i++){
		var sq=document.getElementById('det_sq_'+i);
		sq.style.backgroundColor='';
		sq.classList.remove('det_stato_sq_active');
	}
	if(stato_pratica_attivo===idx){
		stato_pratica_attivo=-1;
	}else{
		document.getElementById('det_sq_'+idx).style.backgroundColor=colori_stato_pratica_sq[idx];
		document.getElementById('det_sq_'+idx).classList.add('det_stato_sq_active');
		stato_pratica_attivo=idx;
	}
	aggiorna_stato_pulsante_salva();
}
function toggle_commerciale(){
	if(!formInEditMode){ return; }
	var dd = document.getElementById('det_commerciale_dropdown');
	var isOpen = (dd.style.display === 'block');
	close_dropdowns();
	if (!isOpen) {
		dd.style.display = 'block';
		$("#det_commerciale").css("z-index", 12000);
		$("#det_commerciale_label").css({"z-index": 12000, "position": "absolute"});
	}
}
function seleziona_commerciale(commerciale){
	if(!formInEditMode){ return; }
	document.getElementById('det_commerciale_btn').innerHTML = commerciale;
	document.getElementById('det_commerciale_dropdown').style.display = 'none';
	$("#det_commerciale").css("z-index", "");
	$("#det_commerciale_label").css("z-index", "");
	det_commerciale_btn = commerciale;
	aggiorna_colore_dropdown('#det_commerciale_btn', commerciale, '');
}
function toggle_bando(){
	if(!formInEditMode){ return; }
	var dd = document.getElementById('det_bando_dropdown');
	var isOpen = (dd.style.display === 'block');
	close_dropdowns();
	$("#energy_call").css("z-index", 12500);
	dd.style.display = isOpen ? 'none' : 'block';

}
function seleziona_bando(bando){
	if(!formInEditMode){ return; }
	document.getElementById('det_bando_btn').innerHTML = bando;
	document.getElementById('det_bando_dropdown').style.display = 'none';
	det_bando_btn = bando;
	aggiorna_colore_dropdown('#det_bando_btn', bando, '');
	$("#det_bando").css("z-index", "");
}

function toggle_commerciale2(){
	var dd = document.getElementById('det_commerciale2_dropdown');
	dd.style.display = (dd.style.display === 'block') ? 'none' : 'block';
}
function seleziona_commerciale2(commerciale){
	document.getElementById('det_commerciale2_btn').innerHTML = commerciale;
	document.getElementById('det_commerciale2_dropdown').style.display = 'none';
}
function toggle_payment(){
	if(!formInEditMode){ return; }
	var dd = document.getElementById('det_payment_dropdown');
	var isOpen = (dd.style.display === 'block');
	close_dropdowns();
	if (!isOpen) {
		dd.style.display = 'block';
		$("#extra_frame").css("z-index", 12000);
	}
}
function seleziona_payment(valore){
	if(!formInEditMode){ return; }
	document.getElementById('det_payment_btn').innerHTML = valore;
	document.getElementById('det_payment_dropdown').style.display = 'none';
	$("#extra_frame").css("z-index", "");
	det_payment_btn = valore;
	aggiorna_colore_dropdown('#det_payment_btn', valore, '');
}
var commessa_count = 1;
function aggiungi_commessa(){
  commessa_count++;
  const list = document.getElementById('det_commesse_list');

  const label = document.createElement('div');
  label.className = 'det_mid_label';
  label.textContent = 'N.COMMESSA';

  const input = document.createElement('input');
  input.type = 'text';
  input.className = 'det_input_sm';
  input.id = 'det_commessa_' + commessa_count;
  input.style.position = 'static';

  list.appendChild(label);
  list.appendChild(input);
} 
$(document).on('click', function(e){
	if (!$(e.target).closest('#etichetta_tipo_cliente').length){
		$('#det_tipo_dropdown').hide();
	}
	if (!$(e.target).closest('.det_canale_wrap').length){
		$('#det_canale_dropdown').hide();
	}
	if (!$(e.target).closest('#det_commerciale').length){
		$('#det_commerciale_dropdown').hide();
	}
	if (!$(e.target).closest('#extra_frame').length){
		$('#det_payment_dropdown').hide();
	}
	if (!$(e.target).closest('#energy_call').length){
		$('#det_bando_dropdown').hide();
	}
});
//////////////////////////////////////////////////////////////////////////////
		function popola_province(){
			var htmlprovince= "";
			var indprovincia=0;
			if($("#provincia option").length > 1) return;

		    $.each(lista_province, function(key, value) {
			htmlprovince= htmlprovince+"<div class='riga_provincia' onmousedown='cliccato_provincia("+indprovincia+")'>"+key+"</div>"
			indprovincia++; 
	 }); 

	 // Aggiorna niceScroll sul DIV contenitore (non sulla select!)
		$('#det_province_dropdown').html(htmlprovince);
			$("#det_province_dropdown").niceScroll({
						  cursorcolor:"rgb(255, 0, 0)", 
						  cursorborder: "0px none #000",
						  cursorborderradius: "0px", 
						  cursoropacitymax:"0.5",
						  cursorwidth:"11px",
						  autohidemode:"true",
						  railoffset: {top:0,left:21},
						  horizrailenabled: false,
						  background:"rgba(255,255,255,0.11)"
						  //background:'#E5E9E7'
						});

} 
//////////////////////////////////////////////////////////////////////////////
function sopra_freccia_dx(){
	$('#freccia_dx_icona_').attr('fill', '#f5be0f');
}
//////////////////////////////////////////////////////////////////////////////
function fuori_freccia_dx(){
	$('#freccia_dx_icona_').attr('fill', '#535353'); 
}
//////////////////////////////////////////////////////////////////////////////
function sopra_freccia_sx(){
	$('#freccia_sx_icona_').attr('fill', '#f5be0f');
}
//////////////////////////////////////////////////////////////////////////////
function fuori_freccia_sx(){
	$('#freccia_sx_icona_').attr('fill', '#535353');
}
//////////////////////////////////////////////////////////////////////////////
function sopra_chiudi_rubrica(){
	$('#close_rub').delay(37).attr('fill', '#eee');
	$('#chiudi_dettaglio_rubrica').css("background-color","#B70000");
}
//////////////////////////////////////////////////////////////////////////////
function fuori_chiudi_rubrica(){
	$('#close_rub').delay(37).attr('fill', '#434343').css("background-color","transparent");
	$('#chiudi_dettaglio_rubrica').css("background-color","transparent");
}
//////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 4477-5201
function close_dropdowns() {
	$("#det_canale_dropdown").hide();	
	$("#det_commerciale_dropdown").hide();	
	$("#det_bando_dropdown").hide(); 
	$("#det_payment_dropdown").hide(); 
	$("#extra_frame").css("z-index", "");
	$("#modal_dropdown").css("z-index", "").hide();
	$("#det_commerciale").css("z-index", "");	
	$("#det_canale_wrap").css("z-index", "");	
	$("#det_cell_label").css("z-index", "");
	$("#det_commerciale_label").css("z-index", "");
	$("#select_land").css("z-index", 1997);	
	$("#energy_call").css("z-index", 1997);
    
} 
//////////////////////////////////////////////////////////////////////////////
function cliccato_modal_dropdown() {
	if (aperto_delete_consumer) {
		return;
	}
	if ($("#mail_selector").is(":visible")) {
		chiudi_mail_selector();
		return;
	}
	$("#modal_dropdown").css("z-index", "").hide();
	$("#extra_frame").css("z-index", "");
	$("#det_commerciale").css("z-index", "");
	$("#det_canale_wrap").css("z-index", "");
	$("#det_cell_label").css("z-index", "");
	$("#det_commerciale_label").css("z-index", "");
	$("#det_payment_dropdown").hide();
	$("#det_canale_dropdown").hide(); 
	$("#det_commerciale_dropdown").hide();
	$("#det_bando_dropdown").hide();
	$("#energy_call").css("z-index", "");
	$("#det_province_dropdown").hide();
} 
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//funzione per immettere interventi selezionati nel form salva_cliente
function estrai_interventi_selezionati(containerId, prefisso){
	var container = document.getElementById(containerId);
	if (!container) return '';
	var rows = container.querySelectorAll('.det_check_row');
	var valori = [];
	for (var i = 0; i < rows.length; i++) {
		if (rows[i].querySelector('.check_mid_ok')) {
			var span = rows[i].querySelector('span');
			if (span && span.textContent.trim() !== '') {
				valori.push(span.textContent.trim());
			}
		}
	}
	return valori.length > 0 ?  valori.join(', ') : '';
}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
function aggiornaCheckboxPrivacy() {
    var el = document.getElementById('check_auth');
    if (!el) return;
    el.classList.toggle('auth_checkbox_ok', confirm_privacy === 1);
    el.classList.toggle('auth_checkbox', confirm_privacy !== 1);
}
//////////////////////////////////////////////////////////////////////////////
function cliccato_check_auth() {
    if (!formInEditMode) return;
    confirm_privacy = (confirm_privacy === 0) ? 1 : 0;
    if (det_rubrica_idx_corrente >= 0 && clienti_filtrati[det_rubrica_idx_corrente]) {
        clienti_filtrati[det_rubrica_idx_corrente][25] = String(confirm_privacy);
    }
    aggiornaCheckboxPrivacy();
}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
function saveCliente(){
	aggiorna_stato_pulsante_salva();
	accendi_frecce();
	if($('#btn_salva_pratica').hasClass('salva_pratica_notenabled')){ return; }
	if(anagraf_new == 1){
//controlla se il nome duplicato è gia in uso
		var nomeInserito = $('#anagraf_nome').val().trim().toUpperCase();
		var duplicato = clienti_filtrati.some(function(c) { return c[1].trim().toUpperCase() === nomeInserito; });
		if(duplicato){
			anag_nome_ok = 0;
			$('#anagraf_nome').css('background-color', mandatory_fields_color).css('color','#eee');
			anima_savebar('NOME GIA IN USO!', '#c30a0a');
			return;
		}
	}
	if (clienti_filtrati.length === 0){
		
	}else{
			if (anagraf_new == 0){
					if(	$("#anagraf_nome").val().toUpperCase() == clienti_filtrati[indice_rubrica][32]) {
				//non toccare cartella se i nomi corrispondono
			} else {
				// rinomina la cartella
						$.ajax({
							url: 'src/rinomina_cartella.php', // Il tuo script server
							type: 'POST',
							dataType: 'json',
							data: {
								oldName: "../clienti_test/"+clienti_filtrati[indice_rubrica][32],
								newName: "../clienti_test/"+$("#anagraf_nome").val().toUpperCase()
							},
							success: function(response) {
								if (response.status === 'success') {
									console.log('Cartella rinominata con successo!');
								} else {
									console.error('Errore: ' + response.message);
								}
							},
							error: function(xhr, status, error) {
								console.error('Errore nella richiesta AJAX: ' + error);
							}
						});
				//console.log("diverso!")
				//se i nomi sono diversi la cartella va rinominata
			}		 
		 }


		}
	popola_form_esportazione();
	if(anagraf_new == 1){
	    salva_dati();
		crea_pdf();
	} else {
		document.forms.esportazione.media.value = '';
		salva_dati();
	}
}   
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//funzione che chiama il PHP sul server per salvare la pratica con la funzione in salvataggio pratica 
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_tipo_cliente_icona" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_tipo_cliente_icona = $( "#anagraf_tipo_cliente_icona" ).val();
	
} );
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_indirizzo" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_indirizzo = $( "#anagraf_indirizzo" ).val();
	
} );
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_comune" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_comune = $( "#anagraf_comune" ).val();
	
} );
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_cap" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_cap = $( "#anagraf_cap" ).val();
	
} );
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_email" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_email = $( "#anagraf_email" ).val();
	
} );
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_tel" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_tel = $( "#anagraf_tel" ).val();
	
});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_data" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_data = $( "#anagraf_data" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_piva" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_piva = $( "#anagraf_piva" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_emailref" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_emailref = $( "#anagraf_emailref" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_pec" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_pec = $( "#anagraf_pec" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#anagraf_codice_univoco" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  anagraf_codice_univoco = $( "#anagraf_codice_univoco" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#det_cons_gest" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  det_cons_gest = $( "#det_cons_gest" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#det_cons_cont" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  det_cons_cont = $( "#det_cons_cont" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#det_cons_annuo" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  det_cons_annuo = $( "#det_cons_annuo" ).val();

});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
$( "#det_note" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  det_note = $( "#det_note" ).val();

});
$( "#label_risp_1" ).on( "blur", function() {
  //alert( "Handler for `blur` called." );
  label_risp_1 = $( "#label_risp_1" ).val();

});
//////////////////////////////////////////////////////////////////////////////
		
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
// FUNZIONI PER MODALITÀ EDIT DEL FORM DETTAGLIO
//////////////////////////////////////////////////////////////////////////////

// Toggle per impostare modalità lettura e modifica
function toggleFormEditMode() {
    formInEditMode = !formInEditMode;
	anagraf_new = 0; 
    readonly = formInEditMode ? 1 : 0;
    if (formInEditMode) {
        tipodati_cliente = "modifica";
        setFormEditable();
		$('#edit_lock_svg_path').attr('d', 'M220-140h520v-434H220v434Zm314.5-162.03Q557-324.06 557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22q31.83 0 54.33-22.03ZM220-140v-434 434Zm0 60q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h330v-96q0-78.85 55.61-134.42Q661.21-920 740.11-920q78.89 0 134.39 55.58Q930-808.85 930-730h-60q0-54-37.88-92t-92-38Q686-860 648-822.08q-38 37.91-38 92.08v96h130q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Z');
		$('#edit_lock_svg').attr('fill', '#29c929');
		$('#modal_one').css("background-color","#baec9b6e");
	spegni_frecce();
    } else {
        setFormReadOnly();
		$('#edit_lock_svg_path').attr('d', 'M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm314.5-162.03Q557-324.06 557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22q31.83 0 54.33-22.03ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z');
		$('#edit_lock_svg').attr('fill', '#FFFFFF');
		$('#modal_one').css("background-color","#d7d0a86e");
		accendi_frecce();
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////
// Imposta tutti i campi del form in modalità editabile
function setFormEditable() {
	//setta il colore dell'sgv clip_tob_rub 
	$('#svg_clip_top_rub').attr('fill', '#1f791f');
    $('#edit_doc_label').html('MODIFICA ATTIVA'); 
    // mostra il contatore posizione solo in modifica di un cliente esistente (non per nuovo cliente)
    if(anagraf_new != 1){ $('#contatore_pos_rubrica').show(); }
    // campi anagrafici 
    $('#anagraf_nome').prop('readonly', false).css('background-color', '#333'); 
    $('#anagraf_indirizzo').prop('readonly', false).css('background-color', '');
    $('#anagraf_comune').prop('readonly', false).css('background-color', '');
    $('#anagraf_cap').prop('readonly', false).css('background-color', '');
    $('#anagraf_email').prop('readonly', false).css({'background-color': '', 'pointer-events': ''});
    $('#anagraf_tel').prop('readonly', false).css('background-color', '');
    $('#anagraf_data').prop('readonly', false).css('background-color', '');
    $('#anagraf_label_indirizzo').css('background-color', '');
    $('#anagraf_label_email').css('background-color', '');
    $('#anagraf_label_tel').css('background-color', '');
    $('#anagraf_label_cap').css('background-color', '');
    $('#anagraf_label_data').css('background-color', '');
    $('#anagraf_piva').prop('readonly', false).css('background-color', '');
    $('#anagraf_emailref').prop('readonly', false).css('background-color', '');
    $('#anagraf_pec').prop('readonly', false).css('background-color', '');
    $('#anagraf_codice_univoco').prop('readonly', false).css('background-color', '');
    // campi consumi
    $('#det_col_risparmio').prop('readonly', true).css('background-color', '#333');
    $('#det_col_impianti').prop('readonly', true).css('background-color', '#333'); 
    $('#det_cons_gest').prop('readonly', false).css('background-color', '#4a4a4a');
    $('#det_cons_cont').prop('readonly', false).css('background-color', '#4a4a4a');
    $('#det_cons_annuo').prop('readonly', false).css('background-color', '#4a4a4a');
    $('#det_cons_gest_label').css('background-color', '');
    $('#det_cons_cont_label').css('background-color', '');
    $('#det_cons_annuo_label').css('background-color', '');
    // note
    $('#det_note').prop('readonly', false).css('background-color', '');
    // tab anagrafica: ripristina i colori dei pulsanti
    $('#anagrafica_tab_button_1').css('background-color', 'rgb(51, 51, 51)');
    $('#anagrafica_tab_button_2').css('background-color', 'rgb(51, 51, 51)');
    $('#anagrafica_tab_button_3').css('background-color', 'rgb(51, 51, 51)');
    $('#anagrafica_tab_button_4').css('background-color', 'rgb(51, 51, 51)');
    // select provincia
    $('#provincia').prop('disabled', false);
    $('#provincia').css({'background-color': '', 'opacity': '', 'color': '', '-webkit-text-fill-color': ''});
    // dropdown custom: sblocca
    $('#det_canale_btn').css({ pointerEvents: 'auto', opacity: '1' });
    $('#det_commerciale_btn').css({ pointerEvents: 'auto', opacity: '1' }); 
	$('#stato_pratica').prop('readonly', false).css('background-color', '');
    $('#det_bando_btn').css({ pointerEvents: 'auto', opacity: '1' });
    $('#det_payment_btn').css({ pointerEvents: 'auto', opacity: '1' });
    $('#anagraf_tipo_cliente_btn').css({ pointerEvents: 'auto', opacity: '1' });
	aggiorna_colore_dropdown('#provincia', $('#provincia').val(), '#bbbbbb');
	aggiorna_colore_dropdown('#det_canale_btn', estrai_testo_btn('det_canale_btn', 'Seleziona Contatto'), '');
	aggiorna_colore_dropdown('#det_commerciale_btn', estrai_testo_btn('det_commerciale_btn', 'Seleziona'), '');
	aggiorna_colore_dropdown('#det_bando_btn', estrai_testo_btn('det_bando_btn', 'Seleziona'), '');
	aggiorna_colore_dropdown('#det_payment_btn', estrai_testo_btn('det_payment_btn', 'Seleziona'), '');
    // checkbox efficientamento e impianti: sblocca e mostra tutte le righe
    $('.det_check_row').css('pointer-events', 'auto').show();
    $('.check_mid, .check_mid_ok').css('background-color', '');
    $('#autorizathion_privacy').css({ pointerEvents: 'auto', opacity: '1' });
    // stato pratica e salva pratica: abilita
    $('#stato_pratica').css('pointer-events', 'auto').removeClass('stato_pratica_notenabled');
    $('#btn_salva_pratica').css('pointer-events', 'auto').removeClass('salva_pratica_notenabled');
    // classe globale form
    $('#det_top_section').removeClass('det_form_readonly');
    // icona edit: verde = modalità edit attiva
    $('#edit_icon').css({ backgroundColor: '#1f791f', backgroundImage: 'url(img/lock_open_40dp_D3D0C6_FILL0_wght400_GRAD0_opsz40.png)', border: '2px solid #1f791f' });
    $('#delete_consumer').addClass('delete_consumer_editable').css('cursor', 'pointer');
    $('#print_form').addClass('print_form_editable').css('cursor', 'pointer');
    $('#icon_printer').addClass('icon_printer_editable').css({'cursor': 'pointer', 'background-color': ''});
	//riempie l'sgv di verde se il form è in edit mode 
    $('#svg_clip_top_rub').attr('fill', '#1f791f');
    $('#det_top_section').css('border', '');
	$('#edit_lock_svg_path').attr('d', 'M220-140h520v-434H220v434Zm314.5-162.03Q557-324.06 557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22q31.83 0 54.33-22.03ZM220-140v-434 434Zm0 60q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h330v-96q0-78.85 55.61-134.42Q661.21-920 740.11-920q78.89 0 134.39 55.58Q930-808.85 930-730h-60q0-54-37.88-92t-92-38Q686-860 648-822.08q-38 37.91-38 92.08v96h130q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Z');
	$('#edit_lock_svg').attr('fill', '#29c929');
	$('#anagraf_nome, #anagraf_indirizzo, #anagraf_comune, #anagraf_cap, #anagraf_email')
		.off('input.salvaPratica')
		.on('input.salvaPratica', aggiorna_stato_pulsante_salva);
		aggiorna_stato_pulsante_salva();
	if(anagraf_new != 1){
		$('#anagraf_email').off('input.editCheck').on('input.editCheck', function() { controlla_mail(this.id); });
		$('#anagraf_emailref').off('input.editCheck').on('input.editCheck', function() { controlla_mail(this.id); });
		$('#anagraf_indirizzo').off('input.editCheck').on('input.editCheck', function() { controlla_indirizzo(this.id); });
		$('#anagraf_cap').off('input.editCheck').on('input.editCheck');
		$('#anagraf_comune').off('input.editCheck').on('input.editCheck', function() { controlla_comune(this.id); });
		$('#anagraf_nome').off('input.editCheck').on('input.editCheck', function() { controlla_nome(this.id); });
		$('#anagraf_tel').off('input.editCheck').on('input.editCheck', function() { controlla_telefono(this.id); });
		controlla_mail('anagraf_email');
		controlla_mail('anagraf_emailref');
		controlla_indirizzo('anagraf_indirizzo');
		controlla_comune('anagraf_comune');
		controlla_nome('anagraf_nome');
		controlla_telefono('anagraf_tel');
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
// Resetta il form a modalità read-only
function setFormReadOnly() { 
    formInEditMode = false;
    readonly = 0; 
	tipodati_cliente = "sola lettura"; 
    // campi anagrafici
	$('#svg_clip_top_rub').attr('fill', '#E31E24');
	$('#edit_doc_label').html('SOLA LETTURA');
    $('#anagraf_nome').prop('readonly', true).css('background-color', ''); 
    $('#anagraf_indirizzo').prop('readonly', true).css('background-color', '#272727');
    $('#anagraf_comune').prop('readonly', true).css('background-color', '#272727'); 
    $('#anagraf_cap').prop('readonly', true).css('background-color', '#272727'); 
    $('#anagraf_email').prop('readonly', true).css({'background-color': '#272727', 'pointer-events': 'none'});
    $('#anagraf_tel').prop('readonly', true).css('background-color', '#272727'); 
    $('#anagraf_data').prop('readonly', true).css('background-color', '#272727');;
    $('#anagraf_piva').prop('readonly', true).css('background-color', '#272727'); 
    $('#anagraf_emailref').prop('readonly', true).css('background-color', '#272727'); 
    $('#anagraf_pec').prop('readonly', true).css('background-color', '#272727');
    $('#anagraf_codice_univoco').prop('readonly', true).css('background-color', '#272727');
    // campi consumi
    $('#det_col_risparmio').prop('readonly', true).css('background-color', 'rgb(82, 82, 82)');
    $('#det_col_impianti').prop('readonly', true).css('background-color', 'rgb(82, 82, 82)'); 
	$('.check_mid').css('background-color', 'rgb(110, 108, 108)');
    $('#det_cons_gest').prop('readonly', true).css('background-color', '#272727');
    $('#det_cons_cont').prop('readonly', true).css('background-color', '#272727');
    $('#det_cons_annuo').prop('readonly', true).css('background-color', '#272727');
    $('#anagrafica_tab_button_1').css('background-color', 'rgb(82, 82, 82)');
    $('#anagrafica_tab_button_2').css('background-color', 'rgb(82, 82, 82)');
    $('#anagrafica_tab_button_3').css('background-color', 'rgb(82, 82, 82)');
    $('#anagrafica_tab_button_4').css('background-color', 'rgb(82, 82, 82)');
    $('#det_cons_gest_label').css('background-color', '#4a4a4a');
    $('#det_cons_cont_label').css('background-color', '#4a4a4a');
    $('#det_cons_annuo_label').css('background-color', '#4a4a4a');
	$('#btn_salva_pratica_ghost').show();
	$('#btn_salva_pratica').hide();

    // note
    $('#det_note').prop('readonly', true).css('background-color', '#333');
	$('#stato_pratica').prop('readonly', true).css('background-color','#333');
    // tab anagrafica: in sola lettura tutti i pulsanti sono #333
    // select provincia
    $('#provincia').prop('disabled', true);
    $('#provincia').css({ pointerEvents: 'none', opacity: '0.5' });
    // dropdown custom: blocca
    $('#det_canale_btn').css({ pointerEvents: 'none', opacity: '0.5' });
    $('#det_commerciale_btn').css({ pointerEvents: 'none', opacity: '0.5' });
    $('#det_bando_btn').css({ pointerEvents: 'none', opacity: '0.5' });
    $('#det_payment_btn').css({ pointerEvents: 'none', opacity: '0.5' });
    // nascondi mail_list_container se è visibile
    if(aperta_lista_mail){
        nascondilistamail();
    }
    $('#anagraf_tipo_cliente_btn').css({ pointerEvents: 'none', opacity: '0.5' });
	aggiorna_colore_dropdown('#provincia', $('#provincia').val(), '#bbbbbb');
	aggiorna_colore_dropdown('#det_canale_btn', estrai_testo_btn('det_canale_btn', 'Seleziona Contatto'), '');
	aggiorna_colore_dropdown('#det_commerciale_btn', estrai_testo_btn('det_commerciale_btn', 'Seleziona'), '');
	aggiorna_colore_dropdown('#det_bando_btn', estrai_testo_btn('det_bando_btn', 'Seleziona'), '');
	aggiorna_colore_dropdown('#det_payment_btn', estrai_testo_btn('det_payment_btn', 'Seleziona'), '');
    // checkbox efficientamento e impianti: blocca le righe
    $('.det_check_row').css('pointer-events', 'none');
    $('#autorizathion_privacy').css({ pointerEvents: 'none', opacity: '0.5' });
    // stato pratica e salva pratica: disabilita
    $('#stato_pratica').css('pointer-events', 'none').addClass('stato_pratica_notenabled');
    $('#btn_salva_pratica').css('pointer-events', 'none').addClass('salva_pratica_notenabled');
	$('#anagraf_nome, #anagraf_indirizzo, #anagraf_comune, #anagraf_cap, #anagraf_email').off('input.salvaPratica');
	aggiorna_stato_pulsante_salva();
    // classe globale form
    $('#det_top_section').addClass('det_form_readonly');
    // chiudi eventuali dropdown aperti
    close_dropdowns();
    $('#anagraf_tipo_cliente_dropdown').hide();
    $('#det_province_dropdown').hide(); 

    $('#edit_icon').css({'backgroundColor': '', 'backgroundImage': '', 'border': ''});
    $('#delete_consumer').removeClass('delete_consumer_editable').css('cursor', 'pointer');
    $('#print_form').removeClass('print_form_editable').css('cursor', 'default');
    $('#icon_printer').removeClass('icon_printer_editable').css({'cursor': 'pointer', 'background-color': ''});
    $('#svg_clip_top_rub').attr('fill', '#E31E24');
    $('#det_top_section').css('border', '');
	$('#edit_lock_svg_path').attr('d', 'M220-80q-24.75 0-42.37-17.63Q160-115.25 160-140v-434q0-24.75 17.63-42.38Q195.25-634 220-634h70v-96q0-78.85 55.61-134.42Q401.21-920 480.11-920q78.89 0 134.39 55.58Q670-808.85 670-730v96h70q24.75 0 42.38 17.62Q800-598.75 800-574v434q0 24.75-17.62 42.37Q764.75-80 740-80H220Zm0-60h520v-434H220v434Zm314.5-162.03Q557-324.06 557-355q0-30-22.67-54.5t-54.5-24.5q-31.83 0-54.33 24.5t-22.5 55q0 30.5 22.67 52.5t54.5 22q31.83 0 54.33-22.03ZM350-634h260v-96q0-54.17-37.88-92.08-37.88-37.92-92-37.92T388-822.08q-38 37.91-38 92.08v96ZM220-140v-434 434Z');
	$('#edit_lock_svg').attr('fill', '#FFFFFF');
} 
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
//<div id="select_land" class="provincia_list"></div>

////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
// Aggiorna la lista TODO nel tab anagrafica_tab_2 con le voci selezionate da EFFICIENTAMENTO e IMPIANTI
// Legge le checkbox con classe 'check_mid_ok' e crea elementi visibili nel div todo_lista
// Ogni elemento mostra solo il titolo (senza checkbox) mantenendo lo stile check_mid_label_ok
/*function aggiornaTodoList() {
    var $todoLista = $('#todo_lista');
    $todoLista.empty();
    var items = [
       
        {id: 'risp_1', label: 'cappotto'}, 
        {id: 'risp_2', label: 'isol. tetto'},
        {id: 'risp_6', label: 'sottotetto'},
        {id: 'risp_5', label: 'infissi'},
        {id: 'risp_3', label: 'oscuranti'},
        {id: 'risp_4', label: 'schermat. solare'},
        {id: 'imp_1', label: 'impianto fv'},
        {id: 'imp_2', label: 'colonnina ric.auto'},
        {id: 'imp_3', label: "batterie d'accumulo"},
        {id: 'imp_4', label: 'caldaia ibrida'},
        {id: 'imp_5', label: 'pompa di calore'}
    ];
    
    var hasItems = false;

    $.each(items, function(i, item) {
        if ($('#check_' + item.id).hasClass('check_mid_ok')) {
            hasItems = true;
            $('<div>')
                .addClass('det_check_row todo_item')
                .append(
                    $('<span>')
                        .addClass('check_mid_label_ok')
                        .text(' ' + item.label)
                )
                .appendTo($todoLista);
        }
    });
    if (!hasItems) {
        $('<span>')
            .addClass('check_mid_label')
            .css('margin-top', '20px')
            .text('Nessuna voce selezionata')
            .appendTo($todoLista);
    }
}*/
////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare email
function controlla_mail(mail){
    ckmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	var val = $("#"+mail).val().trim();
	if(mail === 'anagraf_email'){
		// il campo può contenere più mail separate da \ oppure da ;
		var parti = val.split(/[\\;]/).map(function(s){ return s.trim(); }).filter(function(s){ return s.length > 0; });
		// rimuove le mail senza @ dalla lista, senza illuminare la label di rosso
		var partiValide = parti.filter(function(s){ return s.indexOf('@') !== -1; });
		if(partiValide.length !== parti.length){
			var valorePulito = partiValide.join(' ; ');
			$("#"+mail).val(valorePulito);
			val = valorePulito;
		}
		var tutteValide = partiValide.length > 0 && partiValide.every(function(p){ return ckmail.test(p); });
		if(tutteValide || val === ''){
			anag_email_ok = (val !== '') ? 1 : 0;
			$("#"+mail).css("background-color","#4a4a4a").css("color","#00eeff");
		}else{
			anag_email_ok = 0;
			$("#"+mail).css("background-color",""+mandatory_fields_color+"").css("color","#eee");
		}
	}else if(mail === 'anagraf_emailref' || mail === 'anagraf_pec'){
		// emailref e pec non sono obbligatori, non toccano anag_email_ok
		if(val === '' || ckmail.test(val)){
			$("#"+mail).css("background-color","#4a4a4a").css("color","#00eeff");
		}else{
			$("#"+mail).css("background-color","#69582C").css("color","#eee");
		}
	}else{
		if (ckmail.test(val)){
			anag_email_ok = 1;
			$("#"+mail).css("background-color","#4a4a4a").css("color","#00eeff")
		}else{
			anag_email_ok = 0;
			$("#"+mail).css("background-color",""+mandatory_fields_color+"").css("color","#eee")
		}
	}
	verifica_salva();
}
	
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare indirizzo
function controlla_indirizzo(id){
	var val = $("#"+id).val();
	if ( val.trim().length > 5){
		anag_indirizzo_ok = 1;
		$("#"+id).css("background-color","#4a4a4a").css("color","#00eeff")
	}else{
		anag_indirizzo_ok = 0;
		$("#"+id).css("background-color",""+mandatory_fields_color+"").css("color","#eee")
	}
	verifica_salva();
}
////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare cap
function controlla_cap(id){
	var val = $("#"+id).val(); 
	if ( val.length == 5){
		anag_cap_ok = 1;
		$("#"+id).css("background-color","#4a4a4a").css("color","#00eeff")
	}else{
		 
		$("#"+id).css("background-color",""+mandatory_fields_color+"").css("color","#eee")
	}
	verifica_salva();

}
////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare comune
function controlla_comune(id){
	var val = $("#"+id).val();
	if (val.trim().length > 3){
		anag_comune_ok = 1;
		$("#"+id).css("background-color","#4a4a4a").css("color","#00eeff")
	}else{
		anag_comune_ok = 0;
		$("#"+id).css("background-color",""+mandatory_fields_color+"").css("color","#eee")
	}
	verifica_salva();

}
////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare nome
function controlla_nome(id){
	var val = $("#"+id).val();
	if (val.trim().length >= 7){
		if (anagraf_new == 1) {
			var nomeInserito = val.trim().toUpperCase();
			var duplicato = clienti.some(function(c) { return c[1].trim().toUpperCase() === nomeInserito; });
			if (duplicato) {
				anag_nome_ok = 0;
				$("#"+id).css("background-color",""+mandatory_fields_color+"").css("color","#eee");
				anima_savebar("Nome già in uso!", "#c30a0a");
				verifica_salva();
				return;
			}
		}
		anag_nome_ok = 1;
		$("#"+id).css("background-color","#333").css("color","#00eeff")
	}else{
	anag_nome_ok = 0;
		$("#"+id).css("background-color",""+mandatory_fields_color+"").css("color","#eee")
	}
	verifica_salva();
}
////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare telefono
function controlla_telefono(id){
	var val = $("#"+id).val();
	if (val.trim().length >= 8){
	anag_telefono_ok = 1;
		$("#"+id).css("background-color","#4a4a4a").css("color","#00eeff")
	}else{
	anag_telefono_ok = 0;
		$("#"+id).css("background-color",""+mandatory_fields_color+"").css("color","#eee")
	}
	verifica_salva();
}

////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare stato pratica
////////////////////////////////////////////////////////////////////////////////////////////////////
//funzione per controllare stato pratica
function controlla_stato_pratica(){
	// Esegui il controllo solo quando si crea un nuovo cliente
	if(anagraf_new != 1) return;
	// Per nuovo cliente: stato_pratica visibile
	$("#stato_pratica").show();
} 
		

		
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////		
		$('#esportazione').on('submit', function(event) {
        event.preventDefault(); 
				$.ajax({
					url: 'salva_cliente.php', // Lo script DB
					type: 'POST',
					data: $("#esportazione").serialize(), // 
					success: function(response) {
						// successo
						$('#edit_doc_label').html( "DATI SALVATI!");
						try {
							var res = (typeof response === 'string') ? JSON.parse(response) : response;
							if(res && res.new_id) {
								nuovo_cliente_id = res.new_id;
							}
						} catch(e) {}
						// $('#esportazione')[0].reset(); // Pulisce il form
						// svuota prima di ricaricare
						
						
					},
					error: function(xhr, status, error) {
						// errore
						$('#messaggio_salvataggio_cliente').html('<p style="color: red;">Errore durante l\'invio: ' + "ERRORE DATI NON SALVATI" + '</p>');
					},
					complete: function() {
						// salvataggio eseguito
						tipodati_cliente = "modifica";  
						if(document.forms.esportazione.tipo_dati.value == "modifica") {
						 
						$('#savestate_bar_title').text("CLIENTE MODIFICATO")
							$('#modal_one').css("background-color","#d7d0a86e");
						} else if(document.forms.esportazione.tipo_dati.value == "nuovo") {
						$('#savestate_bar_title').text("NUOVO CLIENTE CREATO");
						//anagraf_new = 0;
						}
						
					anima_savebar();
					
					// aggiorna subito il colore nella rubrica senza attendere reload
					if(det_rubrica_idx_corrente >= 0 && clienti_filtrati[det_rubrica_idx_corrente]){
						clienti_filtrati[det_rubrica_idx_corrente][11] = stato_pratica_attivo;
						var nuovoColore = colori_stato_pratica[String(clienti_filtrati[det_rubrica_idx_corrente][11])] || '#9c9292';
						$('#rubrica_nomi .rubrica_riga').eq(det_rubrica_idx_corrente).find('.rubrica_stato_pratica').css('background-color', nuovoColore);
						verify_status_practice();
					}
				    set_clienti_loaded = [];
					loaddd(anagraf_new,document.forms.esportazione.id.value); 
			

					}
			});
		
		});
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
/// funzione jquery per fare POST duplicata 
		/*$('#esportazione').on('submit', function(event_) {
        event_.preventDefault(); 

				$.ajax({
					url: 'salva_cliente.php', // Lo script DB
					type: 'POST',
					data: $("#esportazione").serialize(), // 
					success: function(response) {
						// successo
						$('#edit_doc_label').html( "DATI SALVATI!");
					   // $('#esportazione')[0].reset(); // Pulisce il form
					},
					error: function(xhr, status, error) {
						// errore
						$('#messaggio_salvataggio_cliente').html('<p style="color: red;">Errore durante l\'invio: ' + "ERRORE DATI NON SALVATI" + '</p>');
					},
					complete: function() {
						// salvataggio eseguito
						if(document.forms.esportazione.tipo_dati.value == "modifica") {
						$('#savestate_bar_title').text("CLIENTE MODIFICATO")	
						} else if(document.forms.esportazione.tipo_dati.value == "nuovo") {
						$('#savestate_bar_title').text("NUOVO CLIENTE CREATO")	
						}
					anima_savebar();

					}
			});
		
		});*/
////////////////////////////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 5246-5293
           function loaddd(neues,idvalutform) {
			   
			   	
			   //console.log("clienti filtrati old:"+clienti_filtrati.length);
			   		set_clienti_loaded = [];                
                    $.ajax({
                    url: 'load_data.php', 
                    type: 'GET',        
                    dataType: 'json',   
                    success: function(response) {
                        // Svuota il contenitore prima di inserire nuovi dati
                        
						//$('#risultato').empty(); 

						if (!Array.isArray(response)) {
							console.error("Risposta load_data non valida:", response);
							return;
						}
                        // Cicla i dati ricevuti
                        $.each(response, function(index, item) {
                           var provincia = item.provincia || '';
                           set_clienti_loaded.push([parseInt(item.id), item.nome, item.tipo_cliente, item.indirizzo, item.comune, provincia, item.cap, item.partitaIVA, item.email, item.IDENT, item.note, item.stato_pratica, item.contratto, item.commessa, item.data, item.canale_contatto, item.commerciale, item.consumo_kw_annuo, item.potenza_contatore, item.telefono, item.Gestore_rete, item.interventi_risparmio, item.interventi_impianti, item['modalità_pagamento'], item.bando, item.privacy, item.media, item.scheda_pdf, item.Log, item.Referentemail, item.pec, item.codice_univoco, item.cartella_cliente]);
							// $('#risultato').append('<p>' + item.nome + ' - ' + item.email + '</p>');
							console.log("modile_"+item['modalità_pagamento'])
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("Errore nella richiesta AJAX: " + error);
                    },
					complete : function(){
						//console.log("clienti filtrati new:"+set_clienti_loaded.length);
						   set_clienti_loaded.sort(ordinamento_array);
						  clienti = set_clienti_loaded;
						  clienti_filtrati = clienti;
					      renderFiltriContratto();
    					  caricaRubrica();
						if (neues==1){
//							console.log("fffffffffffffffffff"+clienti_filtrati[cerca_elemento_idmax(clienti_filtrati, 0)][0]);
						  cliccato_nome_rubrica( trova_elemento_array   (clienti_filtrati,0,clienti_filtrati[(cerca_elemento_idmax(clienti_filtrati, 0))][0])   )
						  anagraf_new = 0;
						}else{
							cliccato_nome_rubrica(trova_elemento_array(clienti_filtrati,0,parseInt(idvalutform)));
						}
					}
					
                });
            };
////////////////////////////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 5306-5418
function aggiorna_stato_pulsante_salva(){
    if(anagraf_new == 1){
        // Nuovo cliente: mostra pulsante solo se i 6 campi obbligatori sono compilati
        var nome = $('#anagraf_nome').val().trim();
        var indirizzo = $('#anagraf_indirizzo').val().trim();
        var comune = $('#anagraf_comune').val().trim();
        var email = $('#anagraf_email').val().trim();
	    var telefono = $('#anagraf_tel').val().trim();
        var campiCompleti = (nome !== '' && indirizzo !== '' && comune !== '' && cap !== '' && email !== '' && telefono !== '');
        if(campiCompleti){
            $('#btn_salva_pratica').show().removeClass('salva_pratica_notenabled')
                .css({'pointer-events':'auto','color':'','background-color':'','opacity':'1','cursor':'pointer'});
            $('#btn_salva_pratica_ghost').hide();
        } else {
            $('#btn_salva_pratica').hide();
            $('#btn_salva_pratica_ghost').show();
        }
    } else {
        // Cliente esistente: mostra pulsante solo in modalità edit
        if(formInEditMode){
            $('#btn_salva_pratica').show().removeClass('salva_pratica_notenabled')
                .css({'pointer-events':'auto','color':'','background-color':'','opacity':'1','cursor':'pointer'});
        } else {
            $('#btn_salva_pratica').hide();
        }
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////
		function sopra_tab(tb){
			if (tab_anagrafica==tb){return;}
			$("#anagrafica_tab_button_"+tb).animate({ top: -3,lineHeight: 34}, { queue: false, duration: 77 }).css("color","rgb(222 218 218)");
		}
////////////////////////////////////////////////////////////////////////////////////////////////////
		function fuori_tab(tb){
			if (tab_anagrafica==tb){return;}
			$("#anagrafica_tab_button_"+tb).animate({ top: 1,lineHeight: 31}, { queue: false, duration: 57 }).css("color","rgb(222 218 218)");
		}
////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
		function click_button_tab(btn){
			if (tab_lunghi==1){
				var alt_tab=508;
				}else if(tab_lunghi==0){
				var alt_tab=299;
			}
			if (btn==1){
				$('#anagrafica_tab_1').animate({ height: alt_tab }, velocit_anim_sidebar);
				$('#anagrafica_tab_2').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_3').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_4').animate({ height: 0 }, velocit_anim_sidebar);
				$("#anagrafica_tab_button_1").css("background-color","rgb(187,156,9)").css("color","rgb(222,218,218)").css("top",-3).css("line-height","34px");
				$("#anagrafica_tab_button_2").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_3").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_4").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_content").css("background-color","rgb(187,156,9)");
				tab_anagrafica=1;
			}else if(btn==2){
				$('#anagrafica_tab_1').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_2').animate({ height: alt_tab }, velocit_anim_sidebar);
				$('#anagrafica_tab_3').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_4').animate({ height: 0 }, velocit_anim_sidebar);
				$("#anagrafica_tab_button_1").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_2").css("background-color","rgb(38,191,193)").css("color","rgb(222,218,218)").css("top",-3).css("line-height","34px");
				$("#anagrafica_tab_button_3").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_4").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_content").css("background-color","rgb(38,191,193)");
				tab_anagrafica=2;
			}else if(btn==3){
				$('#anagrafica_tab_1').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_2').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_3').animate({ height: alt_tab }, velocit_anim_sidebar);
				$('#anagrafica_tab_4').animate({ height: 0 }, velocit_anim_sidebar);
				$("#anagrafica_tab_button_1").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_2").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_3").css("background-color","rgb(29,122,29)").css("color","rgb(222,218,218)").css("top",-3).css("line-height","34px");
				$("#anagrafica_tab_button_4").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_content").css("background-color","rgb(29,122,29)");
				tab_anagrafica=3;
			}else if(btn==4){
				$('#anagrafica_tab_1').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_2').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_3').animate({ height: 0 }, velocit_anim_sidebar);
				$('#anagrafica_tab_4').animate({ height: alt_tab }, velocit_anim_sidebar);
				$("#anagrafica_tab_button_1").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_2").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_3").css("background-color","rgb(51,51,51)").css("color","rgb(222,218,218)").css("top",1).css("line-height","31px");
				$("#anagrafica_tab_button_4").css("background-color","rgb(128,0,128)").css("color","rgb(222,218,218)").css("top",-3).css("line-height","34px");
				$("#anagrafica_content").css("background-color","rgb(128,0,128)");
				tab_anagrafica=4;
			}
		}
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
$( "#" ).on( "keyup", function() {
 
} )
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
function verifica_salva(){
	if(formInEditMode && anagraf_new != 1){ return; }
	if((anag_nome_ok == 1) && (anag_indirizzo_ok == 1) && (anag_comune_ok == 1) && (anag_cap_ok == 1) && (anag_email_ok == 1) && (anag_telefono_ok == 1)&& (anagraf_new == 1)){
	//if(anag_nome_ok && anag_indirizzo_ok && anag_comune_ok && anag_cap_ok && anag_email_ok && anag_telefono_ok  && anagraf_new){
		//accendi tasto salva
		$('#btn_salva_pratica').show();
	} 
	else $('#btn_salva_pratica').hide();
}
////////////////////////////////////////////////////////////////////////////////////////////////////
		function sopra_pul_nuovo_cliente(){
			jQuery("#add_consumer").removeClass("anim_add_consum_back").addClass("anim_add_consum");
		}
////////////////////////////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 5501-5777
function sopra_icon_printer(){
	$('#pdf_svg_1').attr('fill', '#D9E90D'); 
	$('#pdf_svg_2').attr('fill', '#D9E90D'); 
	$('#pdf_svg_3').attr('fill', '#D9E90D'); 
	$('#pdf_svg_4').attr('fill', '#D9E90D'); 
	$('#pdf_svg_5').attr('fill', '#D9E90D'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function fuori_icon_printer(){
	$('#pdf_svg_1').attr('fill', '#E7E7E7'); 
	$('#pdf_svg_2').attr('fill', '#E7E7E7'); 
	$('#pdf_svg_3').attr('fill', '#E7E7E7'); 
	$('#pdf_svg_4').attr('fill', '#E7E7E7'); 
	$('#pdf_svg_5').attr('fill', '#E7E7E7'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
function sopra_edit_lock(){
	$('#mail_file_svg').attr('fill', '#D9E90D'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function fuori_edit_lock(){
	$('#mail_file_svg').attr('fill', '#e7e7e7'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function sopra_edit_lock(){
	$('#edit_lock_svg').attr('fill', '#D9E90D'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function fuori_edit_lock(){
	$('#edit_lock_svg').attr('fill', formInEditMode ? '#29c929' : '#FFFFFF'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
function sopra_delete_consumer(){
	$('#delete_consumer').css("background-color","#e00"); 
	$('#delete_consumer_svg').attr('fill', '#fff'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function fuori_delete_consumer(){
	$('#delete_consumer').css("background-color","transparent"); 
	$('#delete_consumer_svg').attr('fill', '#E7E7E7'); 
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function costruisci_riga_principale(email) {

	var row = $('<div class="mail_selector_row"></div>');
	row.append($('<input type="text" class="mail_selector_input" placeholder="Scrivi l\'email..." autocomplete="off">').val(email));
	var addBtn = $('<div class="mail_selector_add" title="Aggiungi email"></div>').on('click', aggiungi_riga_mail_selector);
	addBtn.append($('<svg class="mail_selector_add_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>'));
	row.append(addBtn);
	return row;
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function costruisci_riga_secondaria(email) {
	var row = $('<div class="mail_selector_row"></div>');
	row.append($('<input type="text" class="mail_selector_input" placeholder="Scrivi l\'email..." autocomplete="off">').val(email));
	var removeBtn = $('<div class="mail_selector_remove" title="Rimuovi email"></div>').on('click', function(){ rimuovi_riga_mail_selector(this); });
	removeBtn.append($('<svg class="mail_selector_remove_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>'));
	row.append(removeBtn);
	return row;
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function posiziona_btn_invia_pdf(){
	var rect = document.getElementById("mail_selector").getBoundingClientRect();
	$("#btn_invia_pdf").css({
		top: rect.bottom + 10 + "px",
		left: rect.left + (rect.width / 2) + "px",
		transform: "translateX(-50%)"
	});
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function aggiorna_contatore_mail(){
	var n = $("#mail_selector_rows .mail_selector_row").length;
	if (n <= 7) {
	$("#contatore_mail").text(n + " / " + max_mail_pdf);
	}
	if (n >= max_mail_pdf) {
		$("#contatore_mail").css({"background-color": "#c30a0a", "color": "#fff"});
	} else {
		$("#contatore_mail").css({"background-color": "", "color": ""});
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function apri_mail_selector(){
	$("#mail_selector_rows").empty().append(costruisci_riga_principale(""));
	aggiorna_contatore_mail();
	$("#modal_dropdown").css({"z-index": "99999", "background": "rgba(10, 159, 13, 0.7)"}).show();
	$("#mail_selector").fadeIn(170, function(){
		posiziona_btn_invia_pdf();
		$("#btn_invia_pdf").fadeIn(170);
		$("#mail_selector_rows .mail_selector_input").first().focus();
	});
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function chiudi_mail_selector(){
	$("#mail_selector").fadeOut(170, function(){
		$(this).hide();
		$("#btn_invia_pdf").hide();
	});
	$("#modal_dropdown").css({"z-index": "", "background": "rgba(254, 3, 3, 0.7)"}).hide();
	$("#mail_selector_rows").empty();
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function aggiungi_riga_mail_selector(){
	if($('.mail_selector_input').length < max_mail_pdf) {
		$("#mail_selector_rows").append(costruisci_riga_secondaria(""));
		$("#mail_selector_rows .mail_selector_input").last().focus();
		aggiorna_contatore_mail();
		posiziona_btn_invia_pdf();
	}
}
////////////////////////////////////////////////////////////////////////////////////////////////////
function rimuovi_riga_mail_selector(el){
	var row = $(el).closest(".mail_selector_row");
	if ($("#mail_selector_rows .mail_selector_row").length > 1) {
		row.remove();
	} else {
		row.find(".mail_selector_input").val("");
	}
	aggiorna_contatore_mail();
	posiziona_btn_invia_pdf();
}
////////////////////////////////////////////////////////////////////////////////////////////////////
	function crea_pdf(){
 //verifica se il cliente attualmente aperto ha già un PDF salvato
		var clienteCorrente = (det_rubrica_idx_corrente >= 0 && clienti_filtrati[det_rubrica_idx_corrente]) ? clienti_filtrati[det_rubrica_idx_corrente] : null;
		/*if (clienteCorrente && clienteCorrente[26]) {
			anima_savebar('PDF già presente in cartella! Impossibile salvare', '#c30a0a');
			return;
		}*/

		if ($("#mail_selector").is(":visible")) {
			var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			var emails = [];
			var invalid = false;
			$("#mail_selector_rows .mail_selector_input").each(function(){
				var v = $(this).val().trim();
				if (!v) return true;
				if (!regex.test(v)) { invalid = true; return true; }
				var lower = v.toLowerCase();
				if ($.inArray(lower, emails) === -1) { emails.push(lower); }
			});
			if (invalid) {
				alert("Uno o più indirizzi email non sono validi.");
				return;
			}
			$("#email_destinazione").val(emails.length > 0 ? emails.join(',') : '');
			chiudi_mail_selector();
		}
		popola_form_esportazione();
		//if(salva){ salva_dati(); }

		
				$.ajax({
					url: 'crea_pdf.php', // Lo script DB
					type: 'POST',
					data: $("#esportazione").serialize(), // 
					success: function(response) {
						try {
							var res = (typeof response === 'string') ? JSON.parse(response) : response;
							if (res && res.status === 'error') {
								alert(res.message || 'PDF già presente nel database.');
								return;
							}
						} catch(e) {}
						//set_clienti_loaded = [];
						//loaddd();
						anima_savebar("PDF CREATO");
					},

					error: function(xhr, status, error) {
						// errore
						$('#messaggio_salvataggio_cliente').html('<p style="color: red;">Errore durante l\'invio: ' + "ERRORE DATI NON SALVATI" + '</p>');
					},
					complete: function() {
						// salvataggio eseguito
//						if(document.forms.esportazione.tipo_dati.value == "modifica") {
//						$('#savestate_bar_title').text("CLIENTE MODIFICATO")	
//						} else if(document.forms.esportazione.tipo_dati.value == "nuovo") {
//						$('#savestate_bar_title').text("NUOVO CLIENTE CREATO")	
//						}
					
//				    set_clienti_loaded = [];
//					loaddd(); 
			

					}
			});
}
//////////////////////////////////////////////////////////////////////////////
		function popola_form_esportazione(){
			
			var destinazione_scheda_pdf="pingoss";
			
			
	document.forms.esportazione.tipo_cliente.value= (typeof tipo_cliente !== 'undefined' && tipo_cliente) ? tipo_cliente : 'privato';
	console.log(document.forms.esportazione.tipo_cliente.value); 
	document.forms.esportazione.nome.value= $("#anagraf_nome").val().toUpperCase();
	console.log(document.forms.esportazione.nome.value); 
	document.forms.esportazione.indirizzo.value= $("#anagraf_indirizzo").val();
	console.log(document.forms.esportazione.indirizzo.value); 
	document.forms.esportazione.comune.value= $("#anagraf_comune").val();
	console.log(document.forms.esportazione.comune.value); 
	document.forms.esportazione.cap.value= $("#anagraf_cap").val();
	console.log(document.forms.esportazione.cap.value); 
	document.forms.esportazione.prov.value= $("#provincia").val();
	console.log(document.forms.esportazione.prov.value); 
	document.forms.esportazione.email.value= $("#anagraf_email").val();  
	console.log(document.forms.esportazione.email.value); 
	document.forms.esportazione.telefono.value= $("#anagraf_tel").val(); 
	console.log(document.forms.esportazione.telefono.value); 
	document.forms.esportazione.codice_univoco.value= $("#anagraf_codice_univoco").val(); 
	console.log(document.forms.esportazione.codice_univoco.value); 
	document.forms.esportazione.interventi_efficientamento.value= estrai_interventi_selezionati('det_col_risparmio', 'Efficientamento');
	console.log(document.forms.esportazione.interventi_efficientamento.value); 
	document.forms.esportazione.interventi_impianti.value= estrai_interventi_selezionati('det_col_impianti', 'Impianti');
	console.log("interventi_impianti"+document.forms.esportazione.interventi_impianti.value); 
	document.forms.esportazione.contatto.value= estrai_testo_btn('det_canale_btn', 'Seleziona Contatto'); 
	console.log("contatto:" +document.forms.esportazione.contatto.value);  
	document.forms.esportazione.commerciale.value= estrai_testo_btn('det_commerciale_btn', 'Seleziona');  
	console.log("commerciale:" + document.forms.esportazione.commerciale.value); 
	document.forms.esportazione.data.value= $("#anagraf_data").val();  
	console.log("data:" +  document.forms.esportazione.data.value); 
	document.forms.esportazione.partita_iva.value= $("#anagraf_piva").val();  
	console.log(document.forms.esportazione.partita_iva.value); 
	var emailref = ($('#anagraf_emailref').val() || '').trim();
	var mailTab4raw = $('#det_mail_referenti').val() || '';
	var mailTab4 = mailTab4raw.replace(/\n/g,';').replace(/;+/g,';').replace(/^;|;$/g,'').trim();
	document.forms.esportazione.email_referente.value = emailref + (mailTab4 ? ';' + mailTab4 : '');
	console.log(document.forms.esportazione.email_referente.value); 
	document.forms.esportazione.pec.value= $("#anagraf_pec").val();  
	console.log(document.forms.esportazione.pec.value); 
	document.forms.esportazione.metodo_pagamento.value= estrai_testo_btn('det_payment_btn', 'Seleziona');  
	console.log(document.forms.esportazione.metodo_pagamento.value); 
	document.forms.esportazione.incentivo.value= estrai_testo_btn('det_bando_btn', 'Seleziona');  
	console.log(document.forms.esportazione.incentivo.value); 
	document.forms.esportazione.gestore_rete.value= $("#det_cons_gest").val();  
	console.log(document.forms.esportazione.gestore_rete.value); 
	document.forms.esportazione.pot_contatore.value= $("#det_cons_cont").val();  
	console.log(document.forms.esportazione.pot_contatore.value); 
	document.forms.esportazione.cons_anno.value= $("#det_cons_annuo").val();  
	console.log(document.forms.esportazione.cons_anno.value); 
	document.forms.esportazione.notes.value= $("#det_note").val();   
	console.log(document.forms.esportazione.notes.value);
	document.forms.esportazione.privacy.value= confirm_privacy;
	console.log('privavy'+ document.forms.esportazione.privacy.value);
    var valore_pdf = '01'; 
    if(!oraserver){ oraserver = Math.floor(Date.now()/1000); carica_ora_server(); }
    console.log('ora caricata: '+ oraserver);
	nome_pdf =  $("#anagraf_nome").val().replace(/\s+/g, "_").toUpperCase() + '-01-' + oraserver + '.pdf' ;
	document.forms.esportazione.media.value = (det_rubrica_idx_corrente >= 0 && clienti_filtrati[det_rubrica_idx_corrente]) ? String(clienti_filtrati[det_rubrica_idx_corrente][26] || '') : '';
//	document.forms.esportazione.media.value = clienti_filtrati[det_rubrica_idx_corrente][26];
	console.log(document.forms.esportazione.media.value);
	document.forms.esportazione.Log.value= '';    			
	console.log('Log'+ document.forms.esportazione.Log.value);
	document.forms.esportazione.nome_pdf.value= nome_pdf;    			
	console.log('nome_pdf'+ document.forms.esportazione.nome_pdf.value);
	document.forms.esportazione.state_practice.value= (stato_pratica_attivo >= 0) ? stato_pratica_attivo : '';  
	console.log(document.forms.esportazione.state_practice.value); 
	document.forms.esportazione.scheda_pdf.value= nome_pdf;    			
	console.log('scheda pdf'+ document.forms.esportazione.scheda_pdf.value);
	document.forms.esportazione.cartella_cliente.value=  $("#anagraf_nome").val().toUpperCase();    			
	console.log('Cartella_cliente'+ document.forms.esportazione.cartella_cliente.value);
			
			// aagiungo al volo il parametro destinazione cartella scheda screazione PDF
							$('<input>').attr({
								type: 'hidden',
								name: 'cartella_scheda',
								value: destinazione_scheda_pdf // ricordarsi di aggiungere lo slash / 
							}).appendTo('#esportazione');
			
			
		}
//////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 5805-5881
function mostraConfermaElimina(){
    cambio_dimensione_finestra();
    $('#savestate_delete_confirm').fadeIn(155);
    $('#modal_dropdown').fadeIn(177);	
	aperto_delete_consumer = 1;	
}
//////////////////////////////////////////////////////////////////////////////
function annullaEliminaCliente(){
    $('#savestate_delete_confirm').fadeOut(200);
    $('#modal_dropdown').fadeOut(177);
	aperto_delete_consumer = 0;	
}
//////////////////////////////////////////////////////////////////////////////
function confermaEliminaCliente(){
    $('#savestate_delete_confirm').fadeOut(200);
    $('#modal_dropdown').fadeOut(177);
	aperto_delete_consumer = 0;	
    eliminaCliente();
}
//////////////////////////////////////////////////////////////////////////////
// Cancellazione definitiva cliente/form dalla rubrica
function eliminaCliente (){
    // Recupera l'id del cliente attualmente visualizzato nel dettaglio
    var id = 0;
    try { id = parseInt(document.forms.esportazione.id.value) || 0; } catch(e){ id = 0; }
    if(!id && typeof det_rubrica_idx_corrente !== 'undefined' &&
        det_rubrica_idx_corrente >= 0 && clienti_filtrati[det_rubrica_idx_corrente]){
        id = parseInt(clienti_filtrati[det_rubrica_idx_corrente][0]) || 0;
    }

    if(!id){
        alert('Nessun cliente selezionato da cancellare.');
        return;
    }

    $.ajax({
        url:  'delete_form.php',
        type: 'POST',
        data: { action: 'delete_cliente', id: id },
        dataType: 'json',
        success: function(res){
            if(res && res.ok){
                // rimuove il contatto cancellato direttamente dall'array in memoria
                clienti = clienti.filter(function(c){ return parseInt(c[0]) !== id; });
                // reset pulito dei filtri della rubrica: torna alla lista completa
                filtro_rub_attivo = "all";
                filtro_rubrica_iniz = "all";
                $(".filtro_icone_cliente, .filtro_icone_preventivo").css("outline","");
                $(".filtro_icone_cliente").css("background-color","#1a1a1a");
                // Resetta icona provincia
                $("#ico_provincia").css("background-color", "#1e1a1a").css("border", "1px solid grey");
                provincia_popup_selezionata = "";
                // Resetta background container_rubrica
                $("#container_rubrica").css("background-color","#878787");
                for(var i=65;i<=90;i++){ $("#lt"+i).removeClass("filtro_rubrica_letter_selected"); }
                // chiude il dettaglio e rimuove la sfocatura
                $("#dettaglio_rubrica").fadeOut(tempo_transizioni);
				$('#container_dock_rubrica').getNiceScroll().remove();
                $("#container_dock_rubrica").css("z-index",-1).animate({ marginLeft: "-1570px" }, 77);
                $("#container_dock_rubrica_mobile").fadeOut(1).css("bottom",-83);
                $("#modal_one").fadeOut(170).removeClass("all_blur");
                aperto_dettaglio_rubrica = 0;
                // ricarica la rubrica con i dati aggiornati
                if(typeof caricaRubrica === 'function'){ caricaRubrica(); }
                // animazione savebar delete
                if(typeof anima_savebar_delete === 'function'){
                    $('#savestate_delete_title').text('CLIENTE CANCELLATO');
                    anima_savebar_delete();
                } else {
                    alert('Errore cancellazione: ' + ((res && res.errore) || 'sconosciuto'));
                }
            }
        },
        error: function(){ alert('Errore di comunicazione con il server.'); }
    });
};	
//////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 5909-6482
	function controlla_file_su_server(urlFile){
		$.ajax({
				url: urlFile,
				type: 'HEAD',
				success: function() {
					console.log("Il file esiste!");
				},
				error: function() {
					console.log("Il file non esiste o non è raggiungibile.");
				}
			});
	}
//////////////////////////////////////////////////////////////////////////////
async function controlla_file_su_server_js(urlFile) {
    try {
        const response = await fetch(urlFile, { method: 'HEAD' });
        
        if (response.ok) {
            console.log("Il file esiste ed è raggiungibile.");
            return true;
        } else {
            console.log("Il file non esiste o il server ha risposto con un errore:", response.status);
            return false;
        }
    } catch (error) {
        console.error("Errore di rete o il server non è raggiungibile:", error);
        return false;
    }
}
//////////////////////////////////////////////////////////////////////////////
	function cerca_elemento_idmax(array, indiceColonna) {
    if (!array || array.length === 0) return -1;

    return array.reduce((maxIndex, riga, indiceCorrente, arr) => {
        return riga[indiceColonna] > arr[maxIndex][indiceColonna] ? indiceCorrente : maxIndex;
    }, 0);
}
//////////////////////////////////////////////////////////////////////////////
	function aggiorna_file_iframe(frame,file){
		$('#'+frame).attr('src', file);
	}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
	function prillo(){
		if(aperto_viewer_rubrica){
			$("#container_file").fadeOut(177);
			$("#chiudi_dettaglio_rubrica").fadeIn(177);
			$("#chiudi_dettaglio_file").fadeOut(177);
			aperto_viewer_rubrica=0;
			accendi_frecce();
			accendi_float_menu_basso();
		}else{
			$("#container_file").fadeIn(177);
			$("#chiudi_dettaglio_rubrica").fadeOut(177);
			$("#chiudi_dettaglio_file").fadeIn(177);
			aperto_viewer_rubrica=1;
			spegni_frecce();
			spegni_float_menu_basso();
		}
		
	}
//////////////////////////////////////////////////////////////////////////////
	function apri_dettaglio_file(){
		aggiorna_file_iframe("container_file_file","pdf_esportati/ACCORDINI_GIUSEPPE-01-260625-1424.pdf");
			$("#container_file").fadeIn(177);
			$("#chiudi_dettaglio_rubrica").fadeOut(177);
			$("#chiudi_dettaglio_file").fadeIn(177);
			aperto_viewer_rubrica=1;
			spegni_frecce();
			spegni_float_menu_basso();
			accendi_float_menu_file()
	}
//////////////////////////////////////////////////////////////////////////////
	function chiudi_dettaglio_file(){
			$("#container_file").fadeOut(177);
			$("#chiudi_dettaglio_rubrica").fadeIn(177);
			$("#chiudi_dettaglio_file").fadeOut(177);
			aperto_viewer_rubrica=0;
			accendi_frecce();
			accendi_float_menu_basso();
			spegni_float_menu_file()
	}
//////////////////////////////////////////////////////////////////////////////
		// viene richiamata dalla funzione ajax recupera_lista_file
	function aggiorna_miniature_rub(idrub){
		//grigione è l'array coi nomi file
			let min = 1;
			let max = grigione.length-1;
			let numeroCasuale = Math.floor(Math.random() * (max - min + 1)) + min;
		var html_dock_rubrica="";
		for (x=0 ; x<=numeroCasuale; x++){ 
			html_dock_rubrica=html_dock_rubrica+"<div class='elemento_container_dock_rubrica' onclick='apri_dettaglio_file()'\"></div>"
		} 
		$('#container_dock_rubrica').html(html_dock_rubrica);
		$('#container_dock_rubrica').getNiceScroll().resize();
		$("container_dock_rubrica").animate({ scrollTop: 0 }, "slow");
	}
//////////////////////////////////////////////////////////////////////////////
	function recupera_lista_file(id_rubrica,carte){
		grigione=[];
								$.ajax({
							url: 'src/lista_file_folder.php',
							type: 'POST',
							dataType: 'json',
							data: {
								cartella: carte,
							},
							success: function(data) {

								if(data.length > 0) {
									$.each(data, function(index, filename) {
										grigione.push(filename);
									});
								} else {
//									// cartella vuota
								}
								//console.log(grigione.length-1)
							},
							error: function() {
								//$('#file-list').html('<li>Errore nel caricamento dei file</li>');
							},
					complete: function() {
						aggiorna_miniature_rub(id_rubrica);
					}
						});

	}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
	function spegni_frecce(){
			$("#freccia_rub_sx").fadeOut(77);
			$("#freccia_rub_dx").fadeOut(77);
	}
//////////////////////////////////////////////////////////////////////////////
	function accendi_frecce(){
			$("#freccia_rub_sx").fadeIn(177);
			$("#freccia_rub_dx").fadeIn(177);
	}
//////////////////////////////////////////////////////////////////////////////
	function accendi_float_menu_basso(){
			$("#float_menu_rubrica_bottom").fadeIn(177);
	}
//////////////////////////////////////////////////////////////////////////////
	function spegni_float_menu_basso(){
			$("#float_menu_rubrica_bottom").fadeOut(77);
	}
//////////////////////////////////////////////////////////////////////////////
	function accendi_float_menu_file(){
			$("#float_menu_file").fadeIn(177);
	}
//////////////////////////////////////////////////////////////////////////////
	function spegni_float_menu_file(){
			$("#float_menu_file").fadeOut(177);
	}
//////////////////////////////////////////////////////////////////////////////
	$('#anagraf_email').click(function(){
		if(aperta_lista_mail){
		   nascondilistamail();
		   }else{
			  mostralistamail() 
		   }
    console.log("email")
});
//////////////////////////////////////////////////////////////////////////////
	$('#anagraf_email').on('input', function(){
		if(aperta_lista_mail){
			var val = $(this).val() || '';
			var parti = val.split(/[\\;]/).map(function(s){ return s.trim(); }).filter(function(s){ return s.length > 0; });
			for(var i=0; i<7; i++){
				$('#mail_item_'+i).val(parti[i] || '');
			}
		}
	});
//////////////////////////////////////////////////////////////////////////////
	function mostralistamail(){
		// popola i campi della lista partendo dal valore corrente di anagraf_email
		var val = $('#anagraf_email').val() || '';
		var parti = val.split(/[\\;]/).map(function(s){ return s.trim(); }).filter(function(s){ return s.length > 0; });
		for(var i=0; i<7; i++){
			$('#mail_item_'+i).val(parti[i] || '');
		}
		$("#mail_list_container").css('display','block').hide().slideDown(177);
		$('.input_mail_list').css({'display':'block','width':'100%','box-sizing':'border-box'});
		aperta_lista_mail=1;
	}
//////////////////////////////////////////////////////////////////////////////
	function nascondilistamail(){
		raccogliMailLista();
		$("#mail_list_container").slideUp(177);
		aperta_lista_mail=0;
	}
//////////////////////////////////////////////////////////////////////////////
	function raccogliMailLista(){
		var mails=[];
		for(var i=0; i<7; i++){
			var v=$('#mail_item_'+i).val().trim();
			if(v && v.indexOf('@') !== -1) mails.push(v);
		}
    var risultato = mails.join(' ; ');
		$('#anagraf_email').val(risultato);
		anagraf_email = risultato;
		controlla_mail('anagraf_email');
		aggiorna_stato_pulsante_salva();
	}
//////////////////////////////////////////////////////////////////////////////
	// chiudi dropdown mail cliccando fuori
	$(document).on('mousedown', function(e){
		if(aperta_lista_mail){
			var container = $('#mail_list_container');
			var emailField = $('#anagraf_email');
			if(!container.is(e.target) && container.has(e.target).length===0
			   && !emailField.is(e.target)){
				nascondilistamail();
			}
		}
	});
//////////////////////////////////////////////////////////////////////////////
	function cliccato_enlarge_tabs(){
		if (tab_lunghi==1){
			riduci_tab(177);
		}
		else if(tab_lunghi==0){
				espandi_tab(177);
				};
	}
//////////////////////////////////////////////////////////////////////////////
	function espandi_tab(veloc){
		
		$('#det_note_section').animate({width: 230}, {duration: veloc,queue: false,complete: function(){} });	
		$('#det_note').animate({width: 221}, {duration: veloc,queue: false,complete: function(){$('#det_note').css("font-size",14)} });	
		$('#contatore_note').animate({left: 130}, {duration: veloc,queue: false,complete: function(){} });
		
		$('#enlarge_tabs').animate({top: 535}, {duration: veloc,queue: false,complete: function(){} });
		
		$('#anagrafica_content').animate({height: 513}, {duration: veloc,queue: false,complete: function(){} });	
		switch (tab_anagrafica) {
			  case 1:
				$('#anagrafica_tab_1').animate({ height: 508 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 0 }, veloc);
				break;
			  case 2:
				$('#anagrafica_tab_1').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 508 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 0 }, veloc);
				break;
			  case 3:
				$('#anagrafica_tab_1').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 508 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 0 }, veloc);
				break;
			  case 4:
				$('#anagrafica_tab_1').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 508}, veloc);
				break;
			  default:
				//console.log("Giorno infrasettimanale.");
			}
		
		$('#det_note').getNiceScroll().resize();
		tab_lunghi=1;
}		
//////////////////////////////////////////////////////////////////////////////
	function riduci_tab(veloc){
		var veloc=177;
		$('#det_note_section').animate({width: 587}, {duration: veloc,queue: false,complete: function(){} });	
		$('#det_note').animate({width: 576}, {duration: veloc,queue: false,complete: function(){$('#det_note').css("font-size",16)} });	
		$('#contatore_note').animate({left: 487}, {duration: veloc,queue: false,complete: function(){} });
		
		$('#enlarge_tabs').animate({top: 327}, {duration: veloc,queue: false,complete: function(){} });
		
		$('#anagrafica_content').animate({height: 305}, {duration: veloc,queue: false,complete: function(){} });	
		switch (tab_anagrafica) {
			  case 1:
				$('#anagrafica_tab_1').animate({ height: 299 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 0 }, veloc);
				break;
			  case 2:
				$('#anagrafica_tab_1').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 299 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 0 }, veloc);
				break;
			  case 3:
				$('#anagrafica_tab_1').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 299 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 0 }, veloc);
				break;
			  case 4:
				$('#anagrafica_tab_1').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_2').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_3').animate({ height: 0 }, veloc);
				$('#anagrafica_tab_4').animate({ height: 299}, veloc);
				break;
			  default:
				//console.log("Giorno infrasettimanale.");
			}		$('#det_note').getNiceScroll().resize();
		tab_lunghi=0;
}		

	
//////////////////////////////////////////////////////////////////////////////
	function sopra_enlarge_tabs(){
		$("#enlarge_tabs").css("background-color","#e6a100")
	}
//////////////////////////////////////////////////////////////////////////////
	function fuori_enlarge_tabs(){
		$("#enlarge_tabs").css("background-color","#737373")
	}
//////////////////////////////////////////////////////////////////////////////
	function sistema_upload_frame(){
		$("#mioDropzone").css("border","0px solid #535353").css("padding","0px 0px 0px 0px ").css("width","311px").css("height","100px").css("line-height","100px").css("margin-top","-37px").css("background-color","transparent");
		$("#coda_file").css("border","4px solid #800080").css("padding","0px 0px 11px 5px ").css("width","467px").css("height","527px").css("margin-top","0px").css("background-color","#737373");	
		$(".dz-remove").css("padding-top","7px");
		$(".dz-image-preview").css("background","transparent");
		$(".dz-upload").css("background","#0f0!important");
		
	}
//////////////////////////////////////////////////////////////////////////////
		var TemplatePersonalizzato = "<div class='dz-preview dz-file-preview mia-anteprima-card' style='background-color: transparent!important;margin:9px 7px 4px 7px!important'> <div class='dz-image ombra_elementi_3' style='border:4px solid #7f7f7f;margin-left: -1px;width: 137px!important; height: 137px!important'>    <!-- Dropzone inietterà l'immagine o l'anteprima qui dentro -->    <img data-dz-thumbnail />  </div> <div class='dz-details'>    <div class='dz-size'><span data-dz-size></span></div>    <div class='dz-filename' ><span data-dz-name></span></div>  </div>  <div class='dz-progress' style='margin-top: 27px;'>    <span class='dz-upload' data-dz-uploadprogress style=''></span>  </div>  <div class='dz-error-message' style='top: 94px!important;left:-2px!important'><span data-dz-errormessage></span></div>  <div class='dz-success-mark'><span style='top:45%!important'><img src='img/ok_thumb.png' width='57'></span></div>  <div class='dz-error-mark' style='top:45%!important'><span><img src='img/not_thumb.png' width='57'></span></div> <div data-dz-remove class='pulsante_remove_prev'>RIMUOVI FILE</div>   <div class='procionazzo'></div>            </div>";
	

	
	
		Dropzone.autoDiscover = false;
			var myDropzone = new Dropzone("#mioDropzone", {
			   // url: "/tuo-endpoint-di-caricamento", // Sostituisci con il tuo URL
				autoProcessQueue: false,              // Blocca l'upload automatico
				parallelUploads: 24  ,
				disablePreviews: false,
				previewsContainer: "#coda_file",
				previewTemplate:TemplatePersonalizzato,
				addRemoveLinks: false,
				thumbnailWidth: 137,   // Imposta la larghezza (in px)
				thumbnailHeight: 137,  // Imposta l'altezza (in px)
				maxFiles: 24,
});
	
//////////////////////////////////////////////////////////////////////////////
	myDropzone.on("addedfile", function(file) {
		if (this.files.length > 1) {
			for (let i = 0; i < this.files.length - 1; i++) {
			  // Confronta nome, dimensione e data di modifica dell'ultimo file aggiunto
			  if (
				this.files[i].name === file.name &&
				this.files[i].size === file.size &&
				this.files[i].lastModified === file.lastModified
			  ) {
				// Rimuove il file duplicato appena inserito
				this.removeFile(file);
				//alert("Questo file è già presente in coda"); 
				break;
			  }
			}
      }
	  // Rileva il totale dei file presenti appena ne viene aggiunto uno
	  console.log("File totali nel widget:", myDropzone.files.length);
		controlla_codafile();
		if(myDropzone.files.length<=9){
			$("#coda_file").css("padding","0px 0px 3px 5px ");
		}else{
			$("#coda_file").css("padding","0px 0px 11px 5px ");
		}
		//nomi_file_caricati();
	});
//////////////////////////////////////////////////////////////////////////////
	myDropzone.on("removedfile", function(file) {
	  // Rileva la rimozione di un file
	  console.log("File rimosso. File rimasti:", myDropzone.files.length);
		controlla_codafile();
		//
		if(myDropzone.files.length<=9){
			$("#coda_file").css("padding","0px 0px 3px 5px ");
		}else{
			$("#coda_file").css("padding","0px 0px 11px 5px ");
		}
		//nomi_file_caricati();
	});

//////////////////////////////////////////////////////////////////////////////
 var valoreRecuperato=""
 var cartellimos=""// Intercetta l'evento di invio
	myDropzone.on("sending", function(file, xhr, formData) {
	  formData.append("cartella", cartellimos);
		 valoreRecuperato = formData.get("cartella");
		nomi_file_caricati()
	});
//////////////////////////////////////////////////////////////////////////////
	function controlla_codafile(){
		if(myDropzone.files.length){
			$("#det_top_section").css("z-index","1")
			$("#invia_coda_file_mb").html("<span class=''> "+dimensione_file_in_coda()+" Mb</span>").fadeIn(177);
			aperta_coda_file=1;
			spegni_frecce();
			spegni_float_menu_basso();
			$("#chiudi_coda_file").fadeIn(177);
			$("#menu_coda_file").fadeIn(177);
			$("#menu_coda_file_sx").fadeIn(177,function(){$("#menu_coda_file_sx").css("display","flex")});
			
			$("#anagrafica_tab_4").css("z-index","1");
			$("#coda_file_modal").fadeIn(77,function(){$("#container_dock_rubrica").getNiceScroll().remove();});
			$("#container_dock_rubrica").css("z-index",100);
			$("#coda_file_ghost").fadeIn(177);
			$("#coda_file").fadeIn(177);
			
			if(myDropzone.files.length<=9){
				$('#coda_file').getNiceScroll().hide();
			}else if(myDropzone.files.length>9){
					$('#coda_file').niceScroll({
						cursorcolor: "rgb(220, 59, 230)",
						cursorborder: "0px none #000",
						cursorborderradius: "0px",
						cursoropacitymax: "0.5",
						cursorwidth: "11px",
						railoffset: {top: 0, left: 9},
						horizrailenabled: false,
						background: "rgba(255,255,255,0.11)",
						emulatetouch: false, // enable cursor-drag scrolling like touch devices in desktop computer
						hwacceleration: true, // use hardware accelerated scroll when supported

					});
			}

		}else{
			aperta_coda_file=0;
			$("#invia_coda_file, #invia_coda_file_mb ,#freccia_upload").fadeOut(177);
			
			$("#anagrafica_tab_4").css("z-index","");
			$("#coda_file_modal").fadeOut(77,function(){
				$("#container_dock_rubrica").niceScroll({
									cursorcolor:"rgba(81,81,81,1.00)",
						cursorborder: "0px none #000",
						cursorborderradius: "5px",
						cursoropacitymax:"0.5",
						cursorwidth:"7px",
						autohidemode:"true",
						railoffset: {top:0,left:11},
						horizrailenabled: "false",
						touchbehavior: true, // Enables drag-to-scroll on desktop and mobile
						//cursordragontouch: true, // Improves cursor drag responsiveness
						background:"rgba(255,255,255,0.11)",
						railpadding: {top:0, right: 0, left: 0, bottom: -7},
						//background:'#E5E9E7'
						callback: function() {
						  $("#ascrail2000").css({"width": "0px", "top": "40px"});
						  }
						});
				$("#det_top_section").css("z-index","1000000000")
			});
			$("#container_dock_rubrica").css("z-index",10010);
			$("#coda_file_ghost").fadeOut(177);
			$("#coda_file").fadeOut(177);
			
			$("#chiudi_coda_file").fadeOut(177);
			$("#menu_coda_file").fadeOut(177);
			$("#menu_coda_file_sx").fadeOut(177);
			accendi_frecce();
			accendi_float_menu_basso();
			$('#coda_file').getNiceScroll().remove();
		}
		controlla_puls_upload();
	}
//////////////////////////////////////////////////////////////////////////////
	function esegui_upload_file(){
		myDropzone.processQueue();
	}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
	function assegna_id_prev(){
					$('.dz-image').each(function(index) {
			$(this).attr('id', 'id-univoco-' + index);
		});
					$('.procionazzo').each(function(index) {
			$(this).attr('id', 'id--' + index).attr('onclick', 'fuffa(' + index+')');
		});
	}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
	function elenco_file_in_coda(){
	  myDropzone.getQueuedFiles().forEach((file, index) => {
    console.log(`File ${index + 1}: ${file.name} (${file.size} bytes)`);
  });
	return(myDropzone.getQueuedFiles());
}
//////////////////////////////////////////////////////////////////////////////
	function dimensione_file_in_coda(){
		var dimensioneTotaleInBytes = 0;
		myDropzone.files.forEach(function(file) {
			dimensioneTotaleInBytes += file.size;
		});

		// Converti la dimensione in Megabyte (MB)
		var dimensioneTotaleMB = (dimensioneTotaleInBytes / (1024 * 1024)).toFixed(2);
		return dimensioneTotaleMB;
		//console.log("Dimensione totale dei file: " + dimensioneTotaleMB + " MB");
	}

//////////////////////////////////////////////////////////////////////////////
		var stringa_media_file=[];	
//////////////////////////////////////////////////////////////////////////////
		function nomi_file_caricati(){
		 stringa_media_file=[];	
		for (sd=0;sd<=myDropzone.files.length-1;sd++){
			stringa_media_file.push(cartellimos+"|"+myDropzone.files[sd]["name"]);
		}
			console.log(stringa_media_file.join(";"))
								 
//		const fileInCoda = myDropzone.getQueuedFiles();
//		const nomiFile = fileInCoda.map(file => file.name);
//		return (nomiFile+valoreRecuperato);
	}
//////////////////////////////////////////////////////////////////////////////
	myDropzone.on("queuecomplete", function() {
		cartellimos="";
		id_destinazione_upload=100;
		aggiorna_db_campo_media();
	  // Si attiva quando tutti i file in coda sono stati elaborati
	  console.log("Tutti i file in coda sono stati caricati con successo!");
		setTimeout(function() {
			myDropzone.removeAllFiles();
			reset_puls_dest_upload();
		}, 1700);
	});

//////////////////////////////////////////////////////////////////////////////
	var stringa_media_aggiornata="";
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
	
	function unico_campo_media(){
		stringa_media_aggiornata="";
			//var pincopallo="a,a,a,b,g,g,h,h,h,h,e".split(",");
		 	//var pincopallo2="a,a,a,b,g,g,h,h,h,h,e,f,g,h".split(",");
		stringa_media_aggiornata = [...new Set([...stringa_media_file, ...document.forms.esportazione.media.value.split(";")])].filter(Boolean);
		return(stringa_media_aggiornata.join(";"));	
		console.log(stringa_media_aggiornata.join(";"));

	}
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
// ---- main071.php righe 6566-6714
	function chiudi_coda_file(){
		$("#menu_coda_file_sx").removeClass("menu_coda_file_sx_anim");
		cartellimos="";
		reset_puls_dest_upload();
		$('#coda_file').getNiceScroll().remove();
		myDropzone.removeAllFiles();
	}
//////////////////////////////////////////////////////////////////////////
	function sopra_chiudi_coda(){
		$('#close_coda_svg_path').attr('fill', '#FFE900');
		$('#close_coda_svg').attr("filter","url(#ombra-esterna)"); 
	}
//////////////////////////////////////////////////////////////////////////
	function fuori_chiudi_coda(){
		$('#close_coda_svg_path').attr('fill', '#ffffff');
		$('#close_coda_svg').attr("filter",""); 
	}
//////////////////////////////////////////////////////////////////////////
	function evidenzia_det_upload(){
		$("#menu_coda_file_sx").addClass("menu_coda_file_sx_anim");
				setTimeout(function() {
			$("#menu_coda_file_sx").removeClass("menu_coda_file_sx_anim");
		}, 570);
	}
//////////////////////////////////////////////////////////////////////////
	function crea_puls_dest_upload(){
		var html_det_button="";
		for(x=0;x<=destinazione_upload.length-1;x++ ){
			html_det_button=html_det_button+"<div id='dest"+x+"' class='pulsante_cartella_file _non_selezionabile'  onclick='click_button_dest_folder("+x+")'>"+destinazione_upload[x][1]+"</div>"
		}
		$("#container_pulsanti_dest_folder").html(html_det_button);
	}
//////////////////////////////////////////////////////////////////////////
	function reset_puls_dest_upload(){
		cartellimos="";
		for(x=0;x<=destinazione_upload.length-1;x++ ){
			$("#dest"+x).removeClass("pulsante_cartella_file_attivo").addClass("pulsante_cartella_file");
		}
	}
//////////////////////////////////////////////////////////////////////////
	function controlla_puls_upload(){
		console.log(cartellimos)
			if((cartellimos!="")){
				console.log("bcgkhvgkhxgckvhgcjvxcgjxgjvcgjvhgcvgh")
				$("#invia_coda_file").html("CARICA "+myDropzone.files.length+ " FILE").fadeIn(177);
				    setTimeout(function() {
					$("#container_pulsanti_dest_folder").addClass("animazione_upload");
				}, 77);

				$("#freccia_upload").fadeIn(177);
				$("#menu_coda_file_sx").removeClass("menu_coda_file_sx_anim");
			   }else{
				$("#menu_coda_file_sx").addClass("menu_coda_file_sx_anim");
				$("#container_pulsanti_dest_folder").removeClass("animazione_upload");
				$("#invia_coda_file").fadeOut(177);
				$("#freccia_upload").fadeOut(177);
			   }
	}
//////////////////////////////////////////////////////////////////////////
	function click_button_dest_folder(idx){
		if (id_destinazione_upload==idx){
			id_destinazione_upload=100;
			cartellimos="";
			reset_puls_dest_upload();
		}else{
					reset_puls_dest_upload();
		cartellimos=destinazione_upload[idx][0];
		id_destinazione_upload=idx;
		$("#dest"+idx).removeClass("pulsante_cartella_file").addClass("pulsante_cartella_file_attivo");

		}
		controlla_puls_upload();
	}
//////////////////////////////////////////////////////////////////////////
	function aggiorna_db_campo_media(){
//		console.log ("-------------------"+stringa_media_aggiornata);
		clienti_filtrati[indice_rubrica][26]=unico_campo_media();
		document.forms.esportazione.media.value = unico_campo_media();
		document.forms.esportazione_solo_media.id.value = parseInt(clienti_filtrati[indice_rubrica][0]);
		document.forms.esportazione_solo_media.solo_media.value = unico_campo_media();
		console.log("AGGIORNO DATABASE");
		console.log(document.forms.esportazione_solo_media.solo_media.value);
		anima_savebar('FILE CARICATI CORRETTAMENTE', '#DB04BB');
		// codice per aggiornare database
	}
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
///////////////////////////////////////////////////////////////;//////////
//////////////////////////////////////////////////////////////////////////
	function verifica_filecartella(url) {
		var result = 0;
			$.ajax({
				url: url,
				type: 'HEAD',
				async: false, // Esecuzione bloccante per poter ritornare il valore
				success: function() {
					result = 1; // Il file o la cartella esiste
				},
				error: function() {
					result = 0; // Il file o la cartella non esiste o non è accessibile
				}
			});
			return result;
	}
//////////////////////////////////////////////////////////////////////////
if (verifica_filecartella("uploads/ALLEGATO FOTO 1.jpgdirectory")){
    //console.log("jdfhgkjdhfkjgdkfhg")
}
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
//modifica la provincia e il cap trovandoli dopo aver selezionato il comune 
function seleziona_comune(nome, cap, prov) {
	document.querySelector('input#anagraf_comune').value = nome;
	document.getElementById('anagraf_cap').value = cap;
	if (prov) {
		$("#provincia option:first").val(prov).text(prov);
		$("#provincia").val(prov);
		aggiorna_provincia_selezionata();
	}
	var dropdown = document.getElementById('comuni_dropdown');
	dropdown.style.display = 'none';
	dropdown.innerHTML = '';
	controlla_comune('anagraf_comune');
	controlla_cap('anagraf_cap');
}
document.addEventListener('click', function(e) {
	var input    = document.getElementById('anagraf_comune');
	var dropdown = document.getElementById('comuni_dropdown');
	if (dropdown && input && !dropdown.contains(e.target) && e.target !== input) {
		dropdown.style.display = 'none';
	}
});
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//			  _____ ___ ____ _  _______ _____ 
//			 |_   _|_ _/ ___| |/ / ____|_   _|
//			   | |  | | |   | ' /|  _|   | |  
//			   | |  | | |___| . \| |___  | |  
//			   |_| |___\____|_|\_\_____| |_| 
//	
//////////////////////////////////////////////////////////////////////////////

// ===== Frammenti copiati da cambio_dimensione_finestra() / gestione tasti =====
// Usano variabili locali dell'originale (larghezza_client, altezza_client, largh_moduli_desk, e) e non vengono richiamati.
/* Gestione tasti - frammento righe 350-370, non eseguibile da solo:
					chiudi_mail_selector();
				} else if (aperto_delete_consumer) {
					annullaEliminaCliente();
				} else if (aperto_dettaglio_rubrica) {
					chiudi_dettaglio_rubrica() 
				
				}
				};
			if(e.keyCode==37){
				// Freccia Sinistra
				if (aperto_dettaglio_rubrica&&!aperto_viewer_rubrica&&!formInEditMode&&!aperta_coda_file) {
					naviga_det_rubrica(-1)
				}
				};
			if(e.keyCode==39){
				// Freccia destra
				if (aperto_dettaglio_rubrica&&!aperto_viewer_rubrica&&!formInEditMode&&!aperta_coda_file) {
					naviga_det_rubrica(1)
				}

				};
*/
function rubric_frammento_2_righe_2052_2125(){
	//regola larghezza altezza rubrica
	$("#container_file").css("width",largh_moduli_desk+30).css("left",(larghezza_client/2)-largh_moduli_desk/2+parseInt($("#sidebar_menu").css("width"))/2-15);
	$("#container_file").css("height", altezza_client-parseInt($("#bottom_bar_menu").css("height"))-7);	
	$("#container_file_file").css("height", altezza_client-parseInt($("#bottom_bar_menu").css("height"))-parseInt($("#container_file_header").css("height"))-11);	
	$("#dettaglio_rubrica").css("width",largh_moduli_desk).css("left",(larghezza_client/2)-largh_moduli_desk/2+parseInt($("#sidebar_menu").css("width"))/2);
	
		// eccezione per schermi alti 1080p
//		if (altezza_client<=937){
		if (tipo_cliente=="azienda"){
			$("#dettaglio_rubrica").css("height", 791);	
			$('#dettaglio_rubrica').css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0})
			$("#container_dock_rubrica").css("height", 791);
			$('#container_dock_rubrica').getNiceScroll().resize();
			$('#container_dock_rubrica').css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0})
			$("#clip_top_rubrica").css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0-37+1})
			$("#contatore_pos_rubrica").css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0-37+1+7})
		$("#filter_icon").css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0-37+1+16, left: parseInt($("#dettaglio_rubrica").css("left"))+685})
			
			$("#float_menu_rubrica_top").css({ top: (parseInt($("#dettaglio_rubrica").css("top")))-37+80})	
			//$("#float_menu_rubrica_top").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-37+80);	
			$("#float_menu_rubrica_top").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+21);	
		
			//$("#float_menu_rubrica_bottom").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-37+70+510);	
			$("#float_menu_rubrica_bottom").css({ top: (parseInt($("#dettaglio_rubrica").css("top")))-37+70+510})
			$("#float_menu_rubrica_bottom").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+21);	

			$("#float_menu_file").css({ top: (parseInt($("#dettaglio_rubrica").css("top")))-37+70+187})
			$("#float_menu_file").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+31);	

		}else{
			$("#dettaglio_rubrica").css("height", 791);	
			$("#dettaglio_rubrica").css("top",(altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0);
			$("#container_dock_rubrica").css("height", 791);	
			$('#container_dock_rubrica').getNiceScroll().resize();
			$("#container_dock_rubrica").css("top",(altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0);
			$("#contatore_pos_rubrica").css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0-37+1+7})
			$("#filter_icon").css({ top: (altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-10-0-37+1+6, left: parseInt($("#dettaglio_rubrica").css("left"))+685})
			
			$("#float_menu_rubrica_top").css({ top: (parseInt($("#dettaglio_rubrica").css("top")))-37+80})
			//$("#float_menu_rubrica_top").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-37+70);	
			$("#float_menu_rubrica_top").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+21);	
		
			//$("#float_menu_rubrica_bottom").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-37+70+480);	
			$("#float_menu_rubrica_bottom").css({ top: (parseInt($("#dettaglio_rubrica").css("top")))-37+70+510})
			$("#float_menu_rubrica_bottom").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+21);	

			$("#float_menu_file").css({ top: (parseInt($("#dettaglio_rubrica").css("top")))-37+70+187})
			$("#float_menu_file").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+31);	

		}
			
			$("#chiudi_dettaglio_rubrica").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-37+4);	
			$("#chiudi_dettaglio_rubrica").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+21);	
			$("#chiudi_dettaglio_warehouse").css("bottom",655);	
			$("#chiudi_dettaglio_warehouse").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+21);	
			$("#chiudi_dettaglio_file").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-84+35);	
			$("#chiudi_dettaglio_file").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+31);	

			// posizionamento autorizathion_privacy e stato_pratica relativi al dettaglio_rubrica
			var privacyTopOffset = (tipo_cliente == "azienda") ? 663 : 663;
			var statoPraticaTopOffset = (tipo_cliente == "azienda") ? 593 : 593;
			$("#autorizathion_privacy").css("left", 602).css("top", privacyTopOffset);
			$("#stato_pratica").css("top", statoPraticaTopOffset);
		
//		}
//			else if (altezza_client>=938){
//			$("#dettaglio_rubrica").css("height", 777);	
//			$("#dettaglio_rubrica").css("top",(altezza_client-parseInt($("#dettaglio_rubrica").css("height")))/2-20);	
//			$("#chiudi_dettaglio_rubrica").css("top",(parseInt($("#dettaglio_rubrica").css("top")))-37);	
//			$("#chiudi_dettaglio_rubrica").css("left",(parseInt($("#dettaglio_rubrica").css("left")))+(parseInt($("#dettaglio_rubrica").css("width")))+17);	
//}
	//regola larghezza altezza rubrica
	$("#container_rubrica").css("width",largh_moduli_desk).css("left",(larghezza_client/2)-largh_moduli_desk/2+parseInt($("#sidebar_menu").css("width"))/2);	
	$("#container_rubrica").css("height", altezza_client-7-parseInt($("#bottom_bar_menu").css("height"))-parseInt($("#container_rubrica").css("top"))-77);	 
}
function rubric_frammento_3_righe_2311_2321(){
	//regola larghezza filtro rubrica
	$("#add_warehouse").css("left",(larghezza_client/2)-largh_moduli_desk/2+parseInt($("#sidebar_menu").css("width"))/2+672);
	//regola larghezza filtro rubrica		
	$("#rubrica_filtro").css("width",largh_moduli_desk).css("left",(larghezza_client/2)-largh_moduli_desk/2+parseInt($("#sidebar_menu").css("width"))/2);
	
	
	//regola posizione container per desktop
	$("#rubrica_nomi").css("width",largh_moduli_desk-margin_container_nomi*2).css("left",(larghezza_client/2)-largh_moduli_desk/2+parseInt($("#sidebar_menu").css("width"))/2);
	
	//regola posizione desktop per altezza
	$("#rubrica_nomi").css("left", 0 + margin_container_nomi).css('top', margin_container_nomi).css("height", parseInt($("#container_rubrica").css("height"))-margin_container_nomi*2);
}
function rubric_frammento_4_righe_2341_2371(){
	//posizione frecce dettaglio rubrica 
	$("#freccia_rub_dx").css("left",parseInt($("#dettaglio_rubrica").css("left"))+largh_moduli_desk+11); 
	$("#freccia_rub_sx").css("left",parseInt($("#dettaglio_rubrica").css("left"))-parseInt($("#freccia_rub_dx").css("width"))-11); 
		$('#freccia_rub_dx').animate({ top: parseInt($("#dettaglio_rubrica").css("top"))+(parseInt($("#dettaglio_rubrica").css("height"))-parseInt($("#freccia_rub_sx").css("height")))/2}, velocit_anim_sidebar/3);
		$('#freccia_rub_sx').animate({ top:  parseInt($("#dettaglio_rubrica").css("top"))+(parseInt($("#dettaglio_rubrica").css("height"))-parseInt($("#freccia_rub_sx").css("height")))/2}, velocit_anim_sidebar/3);
		
		// sistemo i dropdown della rubrica
	$("#anagraf_tipo_cliente_dropdown").css("top", parseInt($("#dettaglio_rubrica").css("top"))+120).css("left",parseInt($("#dettaglio_rubrica").css("left"))-parseInt($("#freccia_rub_dx").css("width"))+110);
		
	$("#det_canale_dropdown").css("top", parseInt($("#dettaglio_rubrica").css("top"))+170).css("left",parseInt($("#dettaglio_rubrica").css("left"))-parseInt($("#freccia_rub_dx").css("width"))+523);
		
	$("#det_commerciale_dropdown").css("top", parseInt($("#dettaglio_rubrica").css("top"))+170).css("left",parseInt($("#dettaglio_rubrica").css("left"))-parseInt($("#freccia_rub_dx").css("width"))+671);
		
		
	$("#det_province_dropdown").css("top", parseInt($("#dettaglio_rubrica").css("top"))+120).css("left",parseInt($("#dettaglio_rubrica").css("left"))-parseInt($("#freccia_rub_dx").css("width"))+811); 
		
	// sposta il popup province a sinistra se la finestra si rimpicciolisce
	var popupWidth = 210;
	var popupLeftPercent = 58;
	var popupLeft = (larghezza_client * popupLeftPercent / 100);
	if (popupLeft + popupWidth/2 > larghezza_client - 20) {
		popupLeft = larghezza_client - popupWidth/2 - 20;
	}
	if (popupLeft - popupWidth/2 < 20) {
		popupLeft = popupWidth/2 + 20;
	}
	$("#popup_province").css("left", popupLeft + "px");
		
	$("#dock_rubrica").css("left",parseInt($("#dettaglio_rubrica").css("left"))-(Math.abs(parseInt($("#dock_rubrica").css("width")))-Math.abs(parseInt($("#dettaglio_rubrica").css("width"))))/2-10);		$("#container_dock_rubrica_mobile").css("left",parseInt($("#dettaglio_rubrica").css("left"))-(Math.abs(parseInt($("#dock_rubrica").css("width")))-Math.abs(parseInt($("#dettaglio_rubrica").css("width")))-50)/2);	
		
	$("#clip_top_rubrica").css("left",parseInt($("#dettaglio_rubrica").css("left"))+(Math.abs(parseInt($("#dettaglio_rubrica").css("width")))-Math.abs(parseInt($("#clip_top_rubrica").css("width"))))/2).css("top", parseInt($("#dettaglio_rubrica").css("top"))-37+2);
}
</script>
