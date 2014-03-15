<?php
    $elementSetMetadata = array(
        'name'        => 'CAVPP_PBCore',
        /* 'description' => "CAVPP custom metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(

	//////////// Descriptive / Admin Metadata ///////////
	
		// Institution. Maps to <pbcoreCollection collectionSource>
		array(
            'label' => 'Institution',
            'name'  => 'Institution',
            /* /* 'description' => 'Name of Institution.', */
			'data_type' => 'Tiny Text',
        ),
		
		// Institution URL. Maps to <pbcoreCollection collectionRef>
		array(
            'label' => 'Institution URL',
            'name'  => 'Institution URL',
            /* /* 'description' => 'Institution\'s website.', */
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
            'label' => 'Director',
            'name'  => 'Director',
            /* 'description' => 'Director. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Interviewer
        array(
            'label' => 'Interviewer',
            'name'  => 'Interviewer',
            /* 'description' => 'Interviewer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Performer
        array(
            'label' => 'Performer',
            'name'  => 'Performer',
            /* 'description' => 'Performer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Producer
		        array(
            'label' => 'Producer',
            'name'  => 'Producer',
            /* 'description' => 'Producer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Writer
        array(
            'label' => 'Writer',
            'name'  => 'Writer',
            /* 'description' => 'Writer. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		

		// Contributors
		// // Camera
        array(
            'label' => 'Camera',
            'name'  => 'Camera',
            /* 'description' => 'Camera technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Cast
		array(
            'label' => 'Cast',
            'name'  => 'Cast',
            /* 'description' => 'Cast member. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Editor
        array(
            'label' => 'Editor',
            'name'  => 'Editor',
            /* 'description' => 'Editor. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Interviewee
        array(
            'label' => 'Interviewee',
            'name'  => 'Interviewee',
            /* 'description' => 'The person(s) being interviewed. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Music
        array(
            'label' => 'Music',
            'name'  => 'Music',
            /* 'description' => 'Music technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Sound
        array(
            'label' => 'Sound',
            'name'  => 'Sound',
            /* 'description' => 'Sound technician. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// // Speaker
        array(
            'label' => 'Speaker',
            'name'  => 'Speaker',
            /* 'description' => 'Speaker. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),		
		
		// Publishers
		// // Publisher
		array(
            'label' => 'Publisher',
            'name'  => 'Publisher',
            /* 'description' => 'Publisher. (For personal names use "LastName, FirstName MiddleName, Suffix").', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Distributor
		array(
            'label' => 'Distributor',
            'name'  => 'Distributor',
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
            'label' => 'Generations',
            'name'  => 'Generations',
            /* 'description' => 'Generations.', */
            'data_type'   => 'Tiny Text',
        ),

		// Format
		array(
            'label' => 'Format',
            'name'  => 'Format',
            /* 'description' => 'Format.', */
            'data_type'   => 'Tiny Text',
        ),

		// Extent
		array(
            'label' => 'Extent',
            'name'  => 'Extent',
            /* 'description' => 'Extent.', */
            'data_type'   => 'Tiny Text',
        ),

		// Duration
		array(
            'label' => 'Duration',
            'name'  => 'Duration',
            /* 'description' => 'Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Running Speed
		array(
            'label' => 'Running Speed',
            'name'  => 'Running Speed',
            /* 'description' => 'Running Speed.', */
            'data_type'   => 'Tiny Text',
        ),

		// Timecode Content Begins
		array(
            'label' => 'Timecode Content Begins',
            'name'  => 'Timecode Content Begins',
            /* 'description' => 'Timecode Content Begins.', */
            'data_type'   => 'Tiny Text',
        ),

		// Track Standard
		array(
            'label' => 'Track Standard',
            'name'  => 'Track Standard',
            /* 'description' => 'Track Standard.', */
            'data_type'   => 'Tiny Text',
        ),

		// Channel Configuration
		array(
            'label' => 'Channel Configuration',
            'name'  => 'Channel Configuration',
            /* 'description' => 'Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// Stock Manufacturer
		array(
            'label' => 'Stock Manufacturer',
            'name'  => 'Stock Manufacturer',
            /* 'description' => 'Stock Manufacturer.', */
            'data_type'   => 'Tiny Text',
        ),

		// Base Type
		array(
            'label' => 'Base Type',
            'name'  => 'Base Type',
            /* 'description' => 'Base Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// Transcript
		array(
            'label' => 'Transcript',
            'name'  => 'Transcript',
            /* 'description' => 'Transcript.', */
        ),
		
		// Moving Image Only Sources
		// Silent or Sound
		array(
            'label' => 'Silent or Sound',
            'name'  => 'Silent or Sound',
            /* 'description' => 'Silent or Sound.', */
            'data_type'   => 'Tiny Text',
        ),

		// Color and/or Black and White
		array(
            'label' => 'Color and/or Black and White',
            'name'  => 'Color and/or Black and White',
            /* 'description' => 'Color and/or Black and White.', */
            'data_type'   => 'Tiny Text',
        ),

		// Aspect Ratio
		array(
            'label' => 'Aspect Ratio',
            'name'  => 'Aspect Ratio',
            /* 'description' => 'Aspect Ratio.', */
            'data_type'   => 'Tiny Text',
        ),

		// Subtitles / Intertitles / Closed Captions
		array(
            'label' => 'Subtitles / Intertitles / Closed Captions',
            'name'  => 'Subtitles / Intertitles / Closed Captions',
            /* 'description' => 'Subtitles / Intertitles / Closed Captions.', */
            'data_type'   => 'Tiny Text',
        ),

	//////// Technical Vendor Metadata //////////////
		// // Digital File Identifier(s)
		array(
            'label' => 'Digital File Identifier(s)',
            'name'  => 'Digital File Identifier(s)',
            /* 'description' => 'Digital File Identifier(s).', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Creation Date
		array(
            'label' => 'Creation Date',
            'name'  => 'Creation Date',
            /* 'description' => 'Creation Date.', */
            'data_type'   => 'Tiny Text',
        ),
		
		// // Frame Size
		array(
            'label' => 'Frame Size',
            'name'  => 'Frame Size',
            /* 'description' => 'Frame Size.', */
            'data_type'   => 'Tiny Text',
        ),

		// // File Extension
		array(
            'label' => 'File Extension',
            'name'  => 'File Extension',
            /* 'description' => 'File Extension.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Standard and File Wrapper
		array(
            'label' => 'Standard and File Wrapper',
            'name'  => 'Standard and File Wrapper',
            /* 'description' => 'Standard and File Wrapper.', */
            'data_type'   => 'Tiny Text',
        ),

		// // File Location
		array(
            'label' => 'File Location',
            'name'  => 'File Location',
            /* 'description' => 'File Location.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Media Type
		array(
            'label' => 'Media Type',
            'name'  => 'Media Type',
            /* 'description' => 'Media Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Generation
		array(
            'label' => 'Generations-Vendor',
            'name'  => 'Generations',
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
            'label' => 'Duration-Vendor',
            'name'  => 'Vendor Duration',
            /* 'description' => 'Duration.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Colors
		array(
            'label' => 'Colors-Vendor',
            'name'  => 'Colors',
            /* 'description' => 'Colors.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Tracks
		array(
            'label' => 'Tracks',
            'name'  => 'Tracks',
            /* 'description' => 'Tracks.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Channel Configuration
		array(
            'label' => 'ChannelConfiguration-Vendor',
            'name'  => 'Vendor Channel Configuration',
            /* 'description' => 'Channel Configuration.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Track Type
		array(
            'label' => 'Track Type',
            'name'  => 'Track Type',
            /* 'description' => 'Track Type.', */
            'data_type'   => 'Tiny Text',
        ),

		// // Encoder 
		array(
            'label' => 'Encoder',
            'name'  => 'Encoder',
            /* 'description' => 'Encoder.', */
            'data_type'   => 'Tiny Text',
        ),

	);
