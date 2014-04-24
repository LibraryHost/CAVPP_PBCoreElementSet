<?php
    $elementSetMetadata = array(
        'name'        => 'CAVPP_PBCore',
        'description' => "CAVPP custom metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(

	//////////// Descriptive / Admin Metadata ///////////
	
		// Institution. Maps to <pbcoreCollection collectionSource>
		array(
            'label' => 'Institution',
            'name'  => 'Institution',
            /* 'description' => 'Name of Institution.', */
			'data_type' => 'Tiny Text',
        ),
		
		// Institution URL. Maps to <pbcoreCollection collectionRef>
		array(
            'label' => 'Institution URL',
            'name'  => 'Institution URL',
            /* 'description' => 'Institution\'s website.', */
			'data_type' => 'Tiny Text',
        ),
		
		// Institution Call # (identifier type). Maps to <pbcoreIdentifier identifierType="Call Number">
		array(
            'label' => 'Institution Call Number',
            'name'  => 'Institution Call Number',
            /* 'description' => 'Institution\'s unique identifier (call number, acquisition number, shelf code).', */
			'data_type' => 'Tiny Text',
        ),
		
        // Item title. Maps to <pbcoreTitle titleType="Main">
        array(
            'label' => 'Title',
            'name'  => 'Title',
            /* 'description' => 'Main Title. Use brackets for supplied titles.', */
            'data_type' => 'Tiny Text',
        ),
		
		// Additional Title. Maps to <pbcoreTitle titleType="Summary">
        array(
            'label' => 'Additional Title',
            'name'  => 'Additional Title',
            /* 'description' =>'Additional Title.', */
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),
		
		// Series Title. Maps to <pbcoreTitle titleType="Series">
		array(
            'label' => 'Series Title',
            'name'  => 'Series Title',
            /* 'description' =>'If applicable, the larger series to which the episode or piece contributed.', */
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),
		
		// Label. Maps to <pbcoreTitle titleType="Label">.
		array(
            'label' => 'Label',
            'name'  => 'Label',
            /* 'description' => 'CAVPP: Please provide a cataloging note here.', */
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),

		
        // Description. Maps to <pbcoreDescription descriptionType="Abstract">
        array(
            'label' => 'Description or Content Summary',
            'name'  => 'Description or Content Summary',
            /* 'description' => 'Uses free-form text to report abstracts, or summaries about the intellectual content of a media item you are cataloging. The information may be in the form of a paragraph giving an individual program description or brief content reviews.', */
        ),
		
		// Extension: Important to CA history. Maps to <pbcoreExtension> -- need detailed mapping
		array(
            'label' => 'Why is this important to California history?',
            'name'  => 'Why is this important to California history?',
            /* 'description' => 'CAVPP: Please provide a cataloging note here.', */
        ),
		
		// Date Created. Maps to <pbcoreAssetDate dateType="created">.
        array(
            'label' => 'Date Created',
            'name'  => 'Date Created',
            /* 'description' => 'The original date that the media item was created. In the case of raw interviews, the date on which the interview was conducted. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Date Published. Maps to <pbcoreAssetDate dateType="published">
        array(
            'label' => 'Date Published',
            'name'  => 'Date Published',
            /* 'description' => 'CAVPP: Please provide cataloging note here. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Extension: Country of Creation. Maps to extension --> 
        array(
            'label' => 'Country of Creation',
            'name'  => 'Country of Creation',
            /* 'description' => 'CAVPP: Please provide cataloging note here.', */
			'data_type' => 'Tiny Text',
        ),
				
		// Creators (dropdown list?)
		// // Director
        array(
            'label' => 'Creator - Director',
            'name'  => 'Creator - Director',
            /* 'description' => 'Director. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Interviewer
        array(
            'label' => 'Creator - Interviewer',
            'name'  => 'Creator - Interviewer',
            /* 'description' => 'Interviewer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Performer
        array(
            'label' => 'Creator - Performer',
            'name'  => 'Creator - Performer',
            /* 'description' => 'Performer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Producer
		        array(
            'label' => 'Creator - Producer',
            'name'  => 'Creator - Producer',
            /* 'description' => 'Producer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Writer
        array(
            'label' => 'Creator - Writer',
            'name'  => 'Creator - Writer',
            /* 'description' => 'Writer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		

		// Contributors
		// // Camera
        array(
            'label' => 'Contributor: Camera',
            'name'  => 'Contributor: Camera',
            /* 'description' => 'Camera technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Cast
		array(
            'label' => 'Contributor - Cast',
            'name'  => 'Contributor - Cast',
            /* 'description' => 'Cast member. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Editor
        array(
            'label' => 'Contributor - Editor',
            'name'  => 'Contributor - Editor',
            /* 'description' => 'Editor. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Interviewee
        array(
            'label' => 'Contributor - Interviewee',
            'name'  => 'Contributor - Interviewee',
            /* 'description' => 'The person(s) being interviewed. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Music
        array(
            'label' => 'Contributor - Music',
            'name'  => 'Contributor - Music',
            /* 'description' => 'Music technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Sound
        array(
            'label' => 'Contributor - Sound',
            'name'  => 'Contributor - Sound',
            /* 'description' => 'Sound technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Speaker
        array(
            'label' => 'Contributor - Speaker',
            'name'  => 'Contributor - Speaker',
            /* 'description' => 'Speaker. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Publishers
		// // Publisher
		array(
            'label' => 'Publisher - Publisher',
            'name'  => 'Publisher - Publisher',
            /* 'description' => 'Publisher. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Distributor
		array(
            'label' => 'Publisher - Distributor',
            'name'  => 'Publisher - Distributor',
            /* 'description' => 'Distributor. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		

		// Copyright Statement. Maps to <pbcoreRightsSummary><rightsSummary>.		
        array(
            'label' => 'Copyright Statement',
            'name'  => 'Copyright Statement',
            /* 'description' => 'Information about rights to the media item. Typically, rights information includes a statement about various property rights associated with the resource, including intellectual property rights.', */
        ),
		
		// Language
		array(
            'label' => 'Language',
            'name'  => 'Language',
            /* 'description' => 'Language.', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Subject Topic
		array(
            'label' => 'Subject Topic',
            'name'  => 'Subject Topic',
            /* 'description' => 'Language.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Subject Entity
		array(
            'label' => 'Subject Entity',
            'name'  => 'Subject Entity',
            /* 'description' => 'Subject Entity. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),

		// Spatial Coverage
		array(
            'label' => 'Spatial Coverage',
            'name'  => 'Spatial Coverage',
            /* 'description' => 'Spatial Coverage.', */
            'data_type'   => 'Tiny Text',
        ),

		// Temporal Coverage
		array(
            'label' => 'Temporal Coverage',
            'name'  => 'Temporal Coverage',
            /* 'description' => 'Temporal Coverage. Format: YYYY-MM-DD', */
            'data_type'   => 'Tiny Text',
        ),

		// Genre
		array(
            'label' => 'Genre',
            'name'  => 'Genre',
            /* 'description' => 'Genre.', */
            'data_type'   => 'Tiny Text',
        ),

		// Cataloger Notes
		array(
            'label' => 'Cataloger Notes',
            'name'  => 'Cataloger Notes',
            /* 'description' => 'Cataloger Notes.', */
        ),

		// Additional Descriptive Notes for Work
		array(
            'label' => 'Additional Descriptive Notes for Work',
            'name'  => 'Additional Descriptive Notes for Work',
            /* 'description' => 'Additional Descriptive Notes for Work.', */
        ),

		// Additional Technical Notes for Work
		array(
            'label' => 'Additional Technical Notes for Work',
            'name'  => 'Additional Technical Notes for Work',
            /* 'description' => 'Additional Technical Notes for Work.', */
        ),

		//Collection Guide Title
		array(
            'label' => 'Collection Guide Title',
            'name'  => 'Collection Guide Title',
            /* 'description' => 'Collection Guide Title.', */
            'data_type'   => 'Tiny Text',
        ),

		// Collection Guide URL
		array(
            'label' => 'Collection Guide URL',
            'name'  => 'Collection Guide URL',
            /* 'description' => 'Collection Guide URL.', */
            'data_type'   => 'Tiny Text',
        ),

		// Physical Asset - Part Of
		array(
            'label' => 'Physical Asset - Part Of',
            'name'  => 'Physical Asset - Part Of',
            /* 'description' => 'Collection Guide URL.', */
            'data_type'   => 'Tiny Text',
        ),		
	
		//Identifiers
		// // Internet Archive URL
		array(
            'label' => 'Internet Archive URL',
            'name'  => 'Internet Archive URL',
            /* 'description' => 'Internet Archive URL.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Object Identifier
		array(
            'label' => 'Object Identifier',
            'name'  => 'Object Identifier',
            /* 'description' => 'Object Identifier.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Project Identifier
		array(
            'label' => 'Project Identifier',
            'name'  => 'Project Identifier',
            /* 'description' => 'Project Identifier.', */
            'data_type'   => 'Tiny Text',
        ),

		// Asset Type
		array(
            'label' => 'Asset Type',
            'name'  => 'Asset Type',
            /* 'description' => 'Asset Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Object ARK
		array(
            'label' => 'Object ARK',
            'name'  => 'Object ARK',
            /* 'description' => 'Object ARK.', */
            'data_type'   => 'Tiny Text',
        ),

		// Institution ARK
		array(
            'label' => 'Institution ARK',
            'name'  => 'Institution ARK',
            /* 'description' => 'Institution ARK.', */
            'data_type'   => 'Tiny Text',
        ),

		// CAVPP Quality Control Notes
		array(
            'label' => 'CAVPP Quality Control Notes',
            'name'  => 'CAVPP Quality Control Notes',
            /* 'description' => 'CAVPP Quality Control Notes.', */
        ),

		// Partner Quality Control Notes
		array(
            'label' => 'Partner Quality Control Notes',
            'name'  => 'Partner Quality Control Notes',
            /* 'description' => 'Partner Quality Control Notes.', */
        ),		
		
		
	///////////// Item Type Metadata //////////////
	
		// Moving Image and Sound sources

		// Generation
		array(
            'label' => 'Generation (original copy)',
            'name'  => 'Generation (original copy)',
            /* 'description' => 'Generation.', */
            'data_type'   => 'Tiny Text',
        ),

		// Format
		array(
            'label' => 'Format (original copy)',
            'name'  => 'Format (original copy)',
            /* 'description' => 'Format.', */
            'data_type'   => 'Tiny Text',
        ),

		// Extent
		array(
            'label' => 'Extent (original copy)',
            'name'  => 'Extent (original copy)',
            /* 'description' => 'Extent.', */
            'data_type'   => 'Tiny Text',
        ),

		// Duration
		array(
            'label' => 'Duration (original copy)',
            'name'  => 'Duration (original copy)',
            /* 'description' => 'Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Running Speed
		array(
            'label' => 'Running Speed (original copy)',
            'name'  => 'Running Speed (original copy)',
            /* 'description' => 'Running Speed.', */
            'data_type'   => 'Tiny Text',
        ),

		// Timecode Content Begins
		array(
            'label' => 'Timecode Content Begins (original copy)',
            'name'  => 'Timecode Content Begins (original copy)',
            /* 'description' => 'Timecode Content Begins.', */
            'data_type'   => 'Tiny Text',
        ),

		// Track Standard
		array(
            'label' => 'Track Standard (original copy)',
            'name'  => 'Track Standard (original copy)',
            /* 'description' => 'Track Standard.', */
            'data_type'   => 'Tiny Text',
        ),

		// Channel Configuration
		array(
            'label' => 'Channel Configuration (original copy)',
            'name'  => 'Channel Configuration (original copy)',
            /* 'description' => 'Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Stock Manufacturer
		array(
            'label' => 'Stock Manufacturer (original copy)',
            'name'  => 'Stock Manufacturer (original copy)',
            /* 'description' => 'Stock Manufacturer.', */
            'data_type'   => 'Tiny Text',
        ),

		// Base Type
		array(
            'label' => 'Base Type (original copy)',
            'name'  => 'Base Type (original copy)',
            /* 'description' => 'Base Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Transcript
		array(
            'label' => 'Transcript (original copy)',
            'name'  => 'Transcript (original copy)',
            /* 'description' => 'Transcript.', */
        ),
		
		// Moving Image Only Sources
		// Silent or Sound
		array(
            'label' => 'Silent or Sound (original copy)',
            'name'  => 'Silent or Sound (original copy)',
            /* 'description' => 'Silent or Sound.', */
            'data_type'   => 'Tiny Text',
        ),

		// Color and/or Black and White
		array(
            'label' => 'Color and/or Black and White (original copy)',
            'name'  => 'Color and/or Black and White (original copy)',
            /* 'description' => 'Color and/or Black and White.', */
            'data_type'   => 'Tiny Text',
        ),

		// Aspect Ratio
		array(
            'label' => 'Aspect Ratio (original copy)',
            'name'  => 'Aspect Ratio (original copy)',
            /* 'description' => 'Aspect Ratio.', */
            'data_type'   => 'Tiny Text',
        ),

		// Subtitles
		array(
            'label' => 'Subtitles (original copy)',
            'name'  => 'Subtitles (original copy)',
            /* 'description' => 'Subtitles.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Intertitles
		array(
            'label' => 'Intertitles (original copy)',
            'name'  => 'Intertitles (original copy)',
            /* 'description' => 'Intertitles.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// Closed Captions
		array(
            'label' => 'Closed Captions (original copy)',
            'name'  => 'Closed Captions (original copy)',
            /* 'description' => 'Closed Captions.', */
            'data_type'   => 'Tiny Text',
        ),

	//////// Technical Vendor Metadata //////////////
		// // Digital File Identifier(s)
		array(
            'label' => 'Digital File Identifier(s) (vendor copy)',
            'name'  => 'Digital File Identifier(s) (vendor copy)',
            /* 'description' => 'Digital File Identifier(s).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Creation Date
		array(
            'label' => 'Creation Date (vendor copy)',
            'name'  => 'Creation Date (vendor copy)',
            /* 'description' => 'Creation Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Frame Size
		array(
            'label' => 'Frame Size (vendor copy)',
            'name'  => 'Frame Size (vendor copy)',
            /* 'description' => 'Frame Size.', */
            'data_type'   => 'Tiny Text',
        ),

		// // File Extension
		array(
            'label' => 'File Extension (vendor copy)',
            'name'  => 'File Extension (vendor copy)',
            /* 'description' => 'File Extension.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Standard and File Wrapper
		array(
            'label' => 'Standard and File Wrapper (vendor copy)',
            'name'  => 'Standard and File Wrapper (vendor copy)',
            /* 'description' => 'Standard and File Wrapper.', */
            'data_type'   => 'Tiny Text',
        ),

		// // File Location
		array(
            'label' => 'File Location (vendor copy)',
            'name'  => 'File Location (vendor copy)',
            /* 'description' => 'File Location.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Media Type
		array(
            'label' => 'Media Type (vendor copy)',
            'name'  => 'Media Type (vendor copy)',
            /* 'description' => 'Media Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Generation
		array(
            'label' => 'Generations (vendor copy)',
            'name'  => 'Generations (vendor copy)',
            /* 'description' => 'Generation.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Preservation Filesize
		array(
            'label' => 'Preservation Filesize',
            'name'  => 'Preservation Filesize',
            /* 'description' => 'Preservation Filesize.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Access Filesize
		array(
            'label' => 'Access Filesize',
            'name'  => 'Access Filesize',
            /* 'description' => 'Access Filesize.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Duration
		array(
            'label' => 'Duration (vendor copy)',
            'name'  => 'Duration (vendor copy)',
            /* 'description' => 'Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Colors
		array(
            'label' => 'Colors (vendor copy)',
            'name'  => 'Colors (vendor copy)',
            /* 'description' => 'Colors.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Tracks
		array(
            'label' => 'Tracks (vendor copy)',
            'name'  => 'Tracks (vendor copy)',
            /* 'description' => 'Tracks.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Channel Configuration
		array(
            'label' => 'Channel Configuration (vendor copy)',
            'name'  => 'Channel Configuration (vendor copy)',
            /* 'description' => 'Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Track Type
		array(
            'label' => 'Track Type (vendor copy)',
            'name'  => 'Track Type (vendor copy)',
            /* 'description' => 'Track Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Encoder 
		array(
            'label' => 'Encoder (vendor copy)',
            'name'  => 'Encoder (vendor copy)',
            /* 'description' => 'Encoder.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Sampling Rate (preservation copy)
		array(
            'label' => 'Sampling Rate (preservation copy)',
            'name'  => 'Sampling Rate (preservation copy)',
            /* 'description' => 'Sampling Rate (preservation copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Data Rate (preservation copy) 
		array(
            'label' => 'Data Rate (preservation copy)',
            'name'  => 'Data Rate (preservation copy)',
            /* 'description' => 'Data Rate (preservation copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Frame Rate (preservation copy) 
		array(
            'label' => 'Frame Rate (preservation copy)',
            'name'  => 'Frame Rate (preservation copy)',
            /* 'description' => 'Frame Rate (preservation copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Bit Depth  (preservation copy) 
		array(
            'label' => 'Bit Depth  (preservation copy)',
            'name'  => 'Bit Depth  (preservation copy)',
            /* 'description' => 'Bit Depth  (preservation copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Data Compression (preservation copy) 
		array(
            'label' => 'Data Compression (preservation copy)',
            'name'  => 'Data Compression (preservation copy)',
            /* 'description' => 'Data Compression (preservation copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Sampling Rate (access copy)
		array(
            'label' => 'Sampling Rate (access copy)',
            'name'  => 'Sampling Rate (access copy)',
            /* 'description' => 'Sampling Rate (access copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Data Rate (access copy) 
		array(
            'label' => 'Data Rate (access copy)',
            'name'  => 'Data Rate (access copy)',
            /* 'description' => 'Data Rate (access copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Frame Rate (access copy) 
		array(
            'label' => 'Frame Rate (access copy)',
            'name'  => 'Frame Rate (access copy)',
            /* 'description' => 'Frame Rate (access copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Bit Depth  (access copy) 
		array(
            'label' => 'Bit Depth  (access copy)',
            'name'  => 'Bit Depth  (access copy)',
            /* 'description' => 'Bit Depth  (access copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Data Compression (access copy) 
		array(
            'label' => 'Data Compression (access copy)',
            'name'  => 'Data Compression (access copy)',
            /* 'description' => 'Data Compression (access copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Relationship/Transfer/Vendor/Creation Date
		array(
            'label' => 'Relationship/Transfer/Vendor/Creation Date',
            'name'  => 'Relationship/Transfer/Vendor/Creation Date',
            /* 'description' => 'Relationship/Transfer/Vendor/Creation Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Preservation File Identifier/MD5/MD5 Date
		array(
            'label' => 'Preservation File Identifier/MD5/MD5 Date',
            'name'  => 'Preservation File Identifier/MD5/MD5 Date',
            /* 'description' => 'Preservation File Identifier/MD5/MD5 Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Access File Identifier/MD5/MD5 Date
		array(
            'label' => 'Access File Identifier/MD5/MD5 Date',
            'name'  => 'Access File Identifier/MD5/MD5 Date',
            /* 'description' => 'Access File Identifier/MD5/MD5 Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Creating Application/Version
		array(
            'label' => 'Creating Application/Version (vendor copy)',
            'name'  => 'Creating Application/Version (vendor copy)',
            /* 'description' => 'Creating Application/Version (vendor copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Source Deck Manufacturer/Model
		array(
            'label' => 'Source Deck Manufacturer/Model (vendor copy)',
            'name'  => 'Source Deck Manufacturer/Model (vendor copy)',
            /* 'description' => 'Source Deck Manufacturer/Model (vendor copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Digitizer Manufacturer/Model
		array(
            'label' => 'Digitizer Manufacturer/Model (vendor copy)',
            'name'  => 'Digitizer Manufacturer/Model (vendor copy)',
            /* 'description' => 'Digitizer Manufacturer/Model (vendor copy).', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Technical Evaluation Report
		array(
            'label' => 'Technical Evaluation Report',
            'name'  => 'Technical Evaluation Report',
            /* 'description' => 'Technical Evaluation Report.', */
            'data_type'   => 'Tiny Text',
        ),
		
		//Vendor Quality Control Notes
		array(
            'label' => 'Vendor Quality Control Notes',
            'name'  => 'Vendor Quality Control Notes',
            /* 'description' => 'Vendor Quality Control.', */
            'data_type'   => 'Tiny Text',
        ),
		
		
	);
