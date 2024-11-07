<?php
/**
 * Class QROptions
 *
 * @created      08.12.2015
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2015 Smiley
 * @license      MIT
 */
declare(strict_types=1);

namespace chillerlan\QRCode;

use chillerlan\Settings\SettingsContainerAbstract;

/**
 * The QRCode settings container
 */
class QROptions extends SettingsContainerAbstract{
	use QROptionsTrait, QRCodeReaderOptionsTrait;
}
