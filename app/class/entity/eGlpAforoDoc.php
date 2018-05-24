<?php
	/**
	 * Object represents table 'glp_aforo_doc'
	 *
     	 * @author: Alexis Sanchez
     	 * @date: 2011-08-16 20:00	 
	 */
	class eGlpAforoDoc{
		
		public $certificadoID;
		public $documentoID;

		public function __construct($certificadoID=null, $documentoID=null)
		{
			$this->certificadoID 	= $certificadoID;
			$this->documentoID 		= $documentoID;
			
			return $this;
		}

		public function __toString()
		{
			return Collection::objectToString($this);
		}
	}
?>