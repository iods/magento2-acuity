<?php
/**
 * Acuity is a base theme package for Magento 2.
 *
 * @author    Rye Miller <rye@drkstr.dev>
 * @copyright Copyright (c) 2021, Rye Miller (https://ryemiller.io)
 * @license   See LICENSE for license details.
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
	ComponentRegistrar::THEME,
	'frontend/Iods/acuity',
	__DIR__
);
