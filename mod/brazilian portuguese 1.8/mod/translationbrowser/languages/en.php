<?php
	/**
	 * Elgg translation browser.
	 * 
	 * @package translationbrowser
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Mariusz Bulkowski
	 * @copyright  2008
	 * @link http://elgg.com/
	 */

	$english = array(
	
		/**
		 * Menu items and titles
		 */
		//Sections
			'translationbrowser' => 'Translation Browser',
			'translationbrowser:default:language' => 'en',
			'translationbrowser:translate' => 'Translate',
			
		//Titles
			'translationbrowser:selectlanguage' => 'Select language',
			'translationbrowser:selecttypeexport' => 'Please select an export type',
			
	
		//Words
			'translationbrowser:yourselectedlanguage' => 'Your selected language',
			'translationbrowser:languagecore' => '- System language',
			'translationbrowser:selectmodule' => 'Now, please select the module that you wish to translate, then click on the "Translate" button.',
			'translationbrowser:updatefile' => 'Update internally the file',
			'translationbrowser:generatefile' => 'Generate php file',
			'translationbrowser:highlight' => 'Highlight untranslated fields',
			'translationbrowser:canyouedit' => 'you can edit this field value',
	
		//Status
			'translationbrowser:blankmodule' => 'You must select at least one module',
			'translationbrowser:languageerror' => 'The selected language is incorrect. Please try again or choose another language.',
			'translationbrowser:blanklang' => 'You must select at least one language',
			'translationbrowser:emptyfields' => 'You must complete at least one field',
			'translationbrowser:error' => 'Internal error. Please try again later',
			'translationbrowser:problem:permiss' => 'There was a problem accessing the folder. Please check privileges',
			'translationbrowser:error:filecreate' => 'There was a problem creating the file. Please check privileges',
			'translationbrowser:success' => 'The translation was successful.',
			'translationbrowser:generatedby' => 'Generated by TranslationBrowser',
	
		//Actions
			'translationbrowser:save' => 'Save',
			'translationbrowser:save' => 'Translate',

		//Warning
  	            'translationbrowser:translate:sametext'  =>  "[WARNING] Same text found. It is necessary to put some differences."

	
	);
					
	add_translation("en",$english);
?>