<?php

namespace craft\commerce\fields;

use Craft;
use craft\commerce\elements\Variant;
use craft\fields\BaseRelationField;

/**
 * Class Variant Field
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  2.0
 */
class Variants extends BaseRelationField
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return Craft::t('commerce', 'Commerce Variants');
    }

    /**
     * @inheritdoc
     */
    public static function defaultSelectionLabel(): string
    {
        return Craft::t('commerce', 'Add a variant');
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected static function elementType(): string
    {
        return Variant::class;
    }
}