<?php

	/**
	 * @see http://www.getsymphony.com/learn/api/2.3.3/toolkit/extension/
	 *
	 * based on https://github.com/hananils/lang_german
	 */

	Class extension_lang_slovak extends Extension {

		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/system/preferences/',
					'delegate' => 'Save',
					'callback' => '__toggleSlovak'
				)
			);
		}

		/**
		 * Toggle between Slovak and default date and time settings
		 */
		public function __toggleSlovak($context) {

			// Set Slovak date and time settings
			if($context['settings']['symphony']['lang'] == 'sk') {
				$this->__setSlovak();
			}

			// Restore default date and time settings
			else {
				$this->__unsetSlovak();
			}
		}

		public function install() {

			// Fetch current date and time settings
			$date = Symphony::Configuration()->get('date_format', 'region');
			$time = Symphony::Configuration()->get('time_format', 'region');
			$separator = Symphony::Configuration()->get('datetime_separator', 'region');

			// Store current date and time settings
			Symphony::Configuration()->set('date_format', $date, 'lang-slovak-storage');
			Symphony::Configuration()->set('time_format', $time, 'lang-slovak-storage');
			Symphony::Configuration()->set('datetime_separator', $separator, 'lang-slovak-storage');
			Symphony::Configuration()->write();
		}

		public function enable(){
			if(Symphony::Configuration()->get('lang', 'symphony') == 'sk') {
				$this->__setSlovak();
			}
		}

		public function disable(){
			$this->__unsetSlovak();
		}

		public function uninstall() {
			$this->__unsetSlovak();

			// Remove storage
			Symphony::Configuration()->remove('lang-slovak-storage');
			Symphony::Configuration()->write();
		}

		/**
		 * Set Slovak date and time format
		 */
		private function __setSlovak() {

			// Set Slovak date and time settings
			Symphony::Configuration()->set('date_format', 'j.n.Y', 'region');
			Symphony::Configuration()->set('time_format', 'G:i', 'region');
			Symphony::Configuration()->set('datetime_separator', ', ', 'region');
			Symphony::Configuration()->write();
		}

		/**
		 * Reset default date and time format
		 */
		private function __unsetSlovak() {

			// Fetch current date and time settings
			$date = Symphony::Configuration()->get('date_format', 'lang-slovak-storage');
			$time = Symphony::Configuration()->get('time_format', 'lang-slovak-storage');
			$separator = Symphony::Configuration()->get('datetime_separator', 'lang-slovak-storage');

			// Store new date and time settings
			Symphony::Configuration()->set('date_format', $date, 'region');
			Symphony::Configuration()->set('time_format', $time, 'region');
			Symphony::Configuration()->set('datetime_separator', $separator, 'region');
			Symphony::Configuration()->write();
		}

	}
