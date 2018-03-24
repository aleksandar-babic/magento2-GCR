<?php
namespace Airslamit\Gcr\Model\Config\Source;

class OptInStyle implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray() {
        return [
            [
            'value' => 'CENTER_DIALOG', 
            'label' => __('Displayed as a dialog box in the center of the view')
            ],
            [
            'value' => 'BOTTOM_RIGHT_DIALOG', 
            'label' => __('Displayed as a dialog box at the bottom right of the view')
            ],
            [
            'value' => 'BOTTOM_LEFT_DIALOG', 
            'label' => __('Displayed as a dialog box at the bottom left of the view')
            ],
            [
            'value' => 'TOP_RIGHT_DIALOG', 
            'label' => __('Displayed as a dialog box at the top right of the view')
            ],
            [
            'value' => 'TOP_LEFT_DIALOG', 
            'label' => __('Displayed as a dialog box at the top left of the view')
            ],
            [
            'value' => 'BOTTOM_TRAY', 
            'label' => __('Displayed in the bottom of the view')
            ]
        ];
    }
}