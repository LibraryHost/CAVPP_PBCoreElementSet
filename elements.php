<?php
    $elementSetMetadata = array(
        'name'        => 'CAVPP_PBCore',
        'description' => "CAVPP custom metadata element set, based on PBCore (a metadata standard for audiovisual media developed by the public broadcasting community. See http://www.pbcore.org/documentation/)",
        'record_type' => 'Item',
    );

    $elements = array(

		//Institution. Maps to ??
		array(
            'label' => 'Institution',
            'name'  => 'Institution',
            'description' => 'Name of the contributing institution.',
			'data_type' => 'Tiny Text',
        ),
		
		//Institution URL. No PBCore mapping.
		array(
            'label' => 'Institution URL',
            'name'  => 'InstURL',
            'description' => 'The URL for the holding institution.',
			'data_type' => 'Tiny Text',
        ),
		
		//Institution Call # (identifier type). Maps to ??
		array(
            'label' => 'Institution Call Number',
            'name'  => 'InstCallNumber',
            'description' => 'Call number at the holding institution.',
			'data_type' => 'Tiny Text',
        ),
		
        //Item title. Maps to <pbcoreTitle titleType="Main">
        array(
            'label' => 'Title',
            'name'  => 'Title',
            'description' => 'The name given to the media item you are cataloging. It is the unique name everyone should use to refer to or search for a particular media item. There are situations in which no proper or given title is available, e.g., photographs or segments harvested from a longer work or program. In these situations a "supplied title" must be invented and used to name the media item. Be considerate of and sensitive to the end user who is attempting to search for your media item.',
            'data_type' => 'Tiny Text',
        ),
		
		//Maps to <pbcoreTitle titleType="Alternative">
        array(
            'label' => 'Additional Title',
            'name'  => 'AdditionalTitle',
            'description' =>'Additional Title.',
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),
		
		//Maps to <pbcoreTitle titleType="Series">
		array(
            'label' => 'Series Title',
            'name'  => 'SeriesTitle',
            'description' =>'If applicable, the larger series to which the episode or piece contributed.',
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),
		
		//Maps to <pbcoreTitle titleType="Label">.
		array(
            'label' => 'Label',
            'name'  => 'Label',
            'description' => 'CAVPP: Please provide a cataloging note here.',
            'data_type'   => 'Tiny Text',
            '_refines'    => 'Title',
        ),

		
        //Description. Maps to <pbcoreDescription descriptionType="Abstract">
        array(
            'label' => 'Description or Content Summary',
            'name'  => 'Description',
            'description' => 'Uses free-form text to report abstracts, or summaries about the intellectual content of a media item you are cataloging. The information may be in the form of a paragraph giving an individual program description or brief content reviews.',
        ),
		
		//Extension: Important to CA history. Maps to <pbcoreExtension> -- need detailed mapping
		array(
            'label' => 'Why is this important to California history?',
            'name'  => 'HistExtension',
            'description' => 'CAVPP: Please provide a cataloging note here.',
        ),
		
		//Date Created. Maps to <pbcoreAssetDate dateType="created">.
        array(
            'label' => 'Date Created',
            'name'  => 'DateCreated',
            'description' => 'The original date that the media item was created. In the case of raw interviews, the date on which the interview was conducted. Format: YYYY-MM-DD',
            'data_type'   => 'Tiny Text',
        ),
		
		//Date Published. Maps to <pbcoreAssetDate dateType="published">
        array(
            'label' => 'Date Published',
            'name'  => 'DatePublished',
            'description' => 'CAVPP: Please provide cataloging note here. Format: YYYY-MM-DD',
            'data_type'   => 'Tiny Text',
        ),
		
		//Country of Creation.
        array(
            'label' => 'Country of Creation',
            'name'  => 'CountryCreation',
            'description' => 'CAVPP: Please provide cataloging note here.',
			'data_type' => 'Tiny Text',
        ),
				
		//Creators (dropdown list?)
		
		//Contributors
		
		//Publishers
		
		//Copyright Statement. Maps to <pbcoreRightsSummary><rightsSummary>.		
        array(
            'label' => 'Copyright Statement',
            'name'  => 'Rights',
            'description'   => 'Information about rights to the media item. Typically, rights information includes a statement about various property rights associated with the resource, including intellectual property rights.',
        ),
		
        //URI for the Omeka landing page for the item. Identifier source is always Omeka.
        array(
            'label' => 'Identifier',
            'name'  => 'Identifier',
            'description' => 'Best practice is to identify the media item (whether analog or digital) by means of an unambiguous string or number corresponding to an established or formal identification system if one exists. We recommend using the item\'s Omeka URL. (e.g., http://myomeka.com/items/show/1) If you are using the Internet Archive Plugin, this field will be autofilled.',
            'data_type'   => 'Tiny Text',
        ),

        //AUTOFILL: but make editable.
        array(
            'label' => 'Creator',
            'name'  => 'Creator',
            'description'   => 'Identifies a person or organization primarily responsible for creating a media item. The creator may be considered an author and could be one or more people, a business, organization, group, project or service. (For personal names use "LastName, FirstName MiddleName, Suffix").',
            'data_type'   => 'Tiny Text',
        ),

        //We should have this field in our mapping doc.
        array(
            'label' => 'Interviewee',
            'name'  => 'Interviewee',
            'description' => 'The person(s) being interviewed. (For personal names use "LastName, FirstName MiddleName, Suffix").',
            'data_type'   => 'Tiny Text',
        ),

        //We should have this field in our mapping doc.
        array(
            'label' => 'Interviewer',
            'name'  => 'Interviewer',
            'description'   => 'The person(s) conducting the interview. (For personal names use "LastName, FirstName MiddleName, Suffix").',
            'data_type'   => 'Tiny Text',
        ),

        //We should have this field in our mapping doc.
        array(
            'label' => 'Host',
            'name'  => 'Host',
            'description' => 'If applicable, the person hosting the broadcast piece. (For personal names use "LastName, FirstName MiddleName, Suffix").',
            'data_type'   => 'Tiny Text',
        ),

        //Physical format comes with a picklist
        array(
            'label'  => 'Physical Format',
            'name'  => 'Physical Format',
            'description' => 'The format of a particular version or rendition of a media item as it exists in an actual physical form that occupies physical space (e.g., a tape on a shelf), rather than as a digital file residing on a server or hard drive.',
            'data_type'   => 'Tiny Text',
        ),

        //Display digital format also comes with a picklist. Mimetype of original uploaded file. Should be the mimetype of whatever the instantiation is. Potentially prepopulate.
        array(
            'label' => 'Digital Format',
            'name'  => 'Digital Format',
            'data_type'   => 'Tiny Text',
        ),

        //This is not hardcoded.
        array(
            'label' => 'Physical Location',
            'name'  => 'Physical Location',
            'description' => 'An address for a physical media item. For an organization or producer acting as caretaker of a media resource, this field may contain information about a specific shelf location for an item, including an organization\'s name, departmental name, shelf ID and contact information.',
            'data_type'   => 'Tiny Text',
        ),

        //AUTOFILL: Internet Archive landing page for the item. Maps to instantiationLocation in PBCore XML.
        array(
            'label' => 'Digital Location',
            'name'  => 'Digital Location',
            'description' => 'An address for a digital media item. Employs an unambiguous reference or identifier for a digital rendition/instantiation of a media item and may include domain, path, filename or html page. This includes URIs for each digital file format created by the Internet Archive (will have multiple values).',
            'data_type'   => 'Tiny Text',
        ),

        //AUTOFILL: Can we automatically detect duration of files when they are uploaded?
        array(
            'label' => 'Duration',
            'name'  => 'Duration',
            'description'   => 'Provides a timestamp for the overall length or duration of the audio. Represents the playback time. Format: HH:MM:SS',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label'       => 'Music/Sound Used',
            'name'        => 'Music/Sound Used',
            'description' => 'Details on music or other sound clips that contributed to the piece. May include title, artist, album, timestamp, producer and record label information.',
        ),

        array(
            'label' => 'Date Peg',
            'name'  => 'Date Peg',
            'description' => 'A holiday or other date relevant to the item (e.g., Christmas, Yom Kippur, Independence Day).',
            'data_type'   => 'Tiny Text',
        ),

        array(
            'label'       => 'Notes',
            'name'        => 'Notes',
            'description' => 'Any other notes or information about the media item, including bibliography/research information, contact information, and legacy metadata.',
            'data_type'   => 'Text',
        ),

        array(
            'label' => 'Transcription',
            'name'  => 'Transcription',
            'description' => 'The textual transcription of the media item.',
            'data_type'   => 'Text',
        ),
    );
