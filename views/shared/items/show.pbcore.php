<?php echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>'; ?>

<pbcoreDescriptionDocument
        xmlns="http://www.PBCore.org/PBCore/PBCoreNamespace.html"
        xmlns:mt="http://www.iana.org/assignments/media-types/"
        xmlns:la="http://www.loc.gov/standards/iso639-2/"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">

    <pbcoreAssetDate dateType="Broadcast"><?php echo metadata($item, array('PBCore', 'Date Broadcast')); ?></pbcoreAssetDate>
    <pbcoreAssetDate dateType="Created"><?php echo metadata($item, array('PBCore', 'Date Created')); ?></pbcoreAssetDate>
    <pbcoreIdentifier source="Omeka"><?php echo metadata($item, array('PBCore', 'Identifier')); ?></pbcoreIdentifier>

    <?php if (!count(metadata($item, array('PBCore', 'Title'), array('all' => true)))) { ?>
    <pbcoreTitle></pbcoreTitle>
    <?php } else {
        foreach (metadata($item, array('PBCore', 'Title'), array('all' => true)) as $title) { ?>
    <pbcoreTitle><?php echo $title; ?></pbcoreTitle>
    <?php }
    } ?>
    <pbcoreTitle titleType="Episode"><?php echo metadata($item, array('PBCore', 'Episode Title')); ?></pbcoreTitle>
    <pbcoreTitle titleType="Series"><?php echo metadata($item, array('PBCore', 'Series Title')); ?></pbcoreTitle>

    <?php if (!count($item->Tags)) { ?>
    <pbcoreSubject source="Free tags"></pbcoreSubject>
    <?php } else {
        foreach ($item->Tags as $tag) { ?>
    <pbcoreSubject source="Free tags"><?php echo $tag; ?></pbcoreSubject>
    <?php }
    } ?>
    <pbcoreDescription><?php echo metadata($item, array('PBCore', 'Description')); ?></pbcoreDescription>
    <pbcoreCoverage>
        <coverage><?php if (function_exists('geolocation_get_location_for_item') && geolocation_get_location_for_item($item, true)) { $location = geolocation_get_location_for_item($item, true); echo $location->address; } ?></coverage>
        <coverageType>Spatial</coverageType>
    </pbcoreCoverage>

    <pbcoreCreator>
        <creator><?php echo metadata($item, array('PBCore', 'Creator')); ?></creator>
        <creatorRole>Creator</creatorRole>
    </pbcoreCreator>
    <pbcoreContributor>
        <contributor><?php echo metadata($item, array('PBCore', 'Interviewee')); ?></contributor>
        <contributorRole><?php echo "Interviewee"; ?></contributorRole>
    </pbcoreContributor>
    <pbcoreContributor>
        <contributor><?php echo metadata($item, array('PBCore', 'Interviewer')); ?></contributor>
        <contributorRole><?php echo "Interviewer"; ?></contributorRole>
    </pbcoreContributor>
    <pbcoreContributor>
        <contributor><?php echo metadata($item, array('PBCore', 'Host')); ?></contributor>
        <contributorRole><?php echo "Host"; ?></contributorRole>
    </pbcoreContributor>

    <pbcoreRightsSummary>
        <rightsSummary><?php echo metadata($item, array('PBCore', 'Rights')); ?></rightsSummary>
    </pbcoreRightsSummary>

    <pbcoreInstantiation>
        <instantiationIdentifier source="Internet Archive"></instantiationIdentifier>
        <instantiationDigital><?php echo metadata($item, array('PBCore', 'Digital Format')); ?></instantiationDigital>
        <instantiationLocation><?php echo metadata($item, array('PBCore', 'Digital Location')); ?></instantiationLocation>
        <instantiationDuration><?php echo metadata($item, array('PBCore', 'Duration')); ?></instantiationDuration>
    </pbcoreInstantiation>
    <pbcoreInstantiation>
    <?php if (!count(metadata($item, array('PBCore', 'Title'), array('all' => true)))) { ?>
        <instantiationIdentifier></instantiationIdentifier>
    <?php } else {
        foreach (metadata($item, array('PBCore', 'Title'), array('all' => true)) as $title) { ?>
        <instantiationIdentifier><?php echo $title; ?></instantiationIdentifier>
    <?php }
    } ?>
        <instantiationPhysical><?php echo metadata($item, array('PBCore', 'Physical Format')); ?></instantiationPhysical>
        <instantiationLocation><?php echo metadata($item, array('PBCore', 'Physical Location')); ?></instantiationLocation>
    </pbcoreInstantiation>

    <pbcoreAnnotation annotationType="Transcription"><?php echo metadata($item, array('PBCore', 'Transcription')); ?></pbcoreAnnotation>
    <pbcoreAnnotation annotationType="Notes"><?php echo metadata($item, array('PBCore', 'Notes')); ?></pbcoreAnnotation>
    <pbcoreAnnotation annotationType="MusicUsed"><?php echo metadata($item, array('PBCore', 'Music/Sound Used')); ?></pbcoreAnnotation>
    <pbcoreAnnotation annotationType="DatePeg"><?php echo metadata($item, array('PBCore', 'Date Peg')); ?></pbcoreAnnotation>
</pbcoreDescriptionDocument>
