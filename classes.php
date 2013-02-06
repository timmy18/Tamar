<?php

define('JOB_EMPLOYEE', 'employee');
define('JOB_MANAGER', 'manager');


	class user {
		public $username;
		
		public function __construct($username) {
			$this->username = $username;
		}
	}
	
	/**
	 * Phonebook class.
	 */
	class phonebook {
		// Provides phonebook structure definition.
		private $structure;
		private $contacts;
		private $filename;
		
		public function __construct($param) {
			if (is_array($param)) {
				// The param is a structure.
				// Build a new phonebook according to the provided structure.
			}
			
			// Param is a string that is the filename. Either load that if it exists or create a new one.
			$this->filename = $param;
			if (file_exists($param)) {
				$this->load($param);
			}
		}
		
		
		/**
		 * Save information to a file / database / whatever.
		 */
		public function save()	{
			// Save to file.
		}
		
		/**
		 * Load a phonebook from a file.
		 */
		 public function load($filename) {
			 
		 }
		
		
		/**
		 * Search for a specific contact in the phonebook by a specified parameter.
		 * 
		 * @param $search_string
		 *   String to search for.
		 * @param $parameter
		 *   Parameter in a contact object to search in. Defaults to 'name'.
		 * 
		 * @return
		 *  ID of the contact object.
		 */
		 public function search($search_string, $parameter = 'name') {
			 
		 }
				
		/**
		 * Create contact and add it to the phonebook.
		 */		
		public function addContact($information) {
			// do stuff.
			$this->contacts[] = $contact;
			$this->save();
		}
	
		/**
		 * Remove a contect from the phonebook.
		 */		
		public function removeContact($id) {
			$contacts = &$this->contacts;
			// do stuff.
			$this->contacts[$id];
		}
	
	}
	
	/**
	 * Holds contact information.
	 */
	class contact {
		private $information;
		
		/**
		 * Construct function, put contact information into the object.		 
		 * 
		 * @param $information
		 *   Array; optional; information that the contact holds.
		 */
		public function __construct($information = array()) {
			$this->information = $information;
		}
		
		/**
		 * Get infomration from the contact.
		 */
		 public function getInfo($var_name = '') {
		 	if ($var_name) {
				return $this->information[$var_name];
		 	}
			return $this->information;
		 }
		 
		 /**
		  * Set infomartion.
		  */
		  public function setInfo($var_name, $var_value) {
		  	$this->information[$var_name] = $var_value;
		  }
	}
	
	
	$info = array(
		'name' => 'Moshe',
		'job' => JOB_EMPLOYEE,
		'address' => 'Nowhere',
	);
	$contact1 = new contact($info);

	$info = array(
		'name' => 'Douche',
		'phone' => '4321',
		'job' => JOB_MANAGER,
		'employees' => array('Moshe')
	);
	$contact2 = new contact($info);
	
	$structure = array('name', 'phone', 'job', 'employees', 'address');
	$phonebook = new phonebook($structure);
	$phonebook->addContact($contact1->getInfo());
