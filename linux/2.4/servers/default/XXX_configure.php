<?php

include '../../../../../../XXX_ServerConfiguration/development/centOS7/XXX_ServerConfiguration.php';

$composedContent = XXX_ServerConfiguration::composeConfigurationFileWithIncludes(XXX_ServerConfiguration::$paths['applicationSources'] . '/Comcordis_Apache_HTTPServer_Configuration/development/linux/2.4/servers/default/initialize.conf');

$destinationPath = '/etc/httpd/conf.d/composed.Comcordis_Apache_HTTPServer_Configuration.initialize.conf';

XXX_ServerConfiguration::writeFileContent($destinationPath, $composedContent);

?>