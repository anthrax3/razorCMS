<?php

namespace Razilo\Model;

use Razilo\Library\NORM;

final class System extends NORM
{
	const TABLE = 'system';

	protected $id;

	public $version;
	public $milestone;
	public $release;
}
