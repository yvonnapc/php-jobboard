<?php
    class JobOpening
    {
        private $title;
        private $description;
        private $contact;

        function __construct($job_title, $job_description, $job_contact)
        {
          $this->title = $job_title;
          $this->description = $job_description;
          $this->contact = $job_contact;
        }
        function setTitle($newTitle)
        {
          $this->title = $newTitle;
        }
        function setJobDecripton($newJobDescription)
        {
          $this->jobDescription = $newJobDescription;
        }
        function setJobContact($newJobContact)
        {
          $this->contact = $newJobContact;
        }
        function getTitle()
        {
          return $this->title;
        }
        function getJobDescription()
        {
          return $this->description;
        }
        function getJobContact()
        {
          return $this->contact;
        }
    }
?>
