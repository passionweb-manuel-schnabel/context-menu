<?php

namespace Passionweb\ContextMenu\ContextMenu;

use TYPO3\CMS\Backend\ContextMenu\ItemProviders\AbstractProvider;

class CodebreakItemProvider extends AbstractProvider
{
    protected $itemsConfiguration = [
        'Codebreak Option' => [
            'type' => 'item',
            'label' => 'LLL:EXT:context_menu/Resources/Private/Language/locallang.xlf:item-provider.codebreak-option',
            'iconIdentifier' => 'actions-lightbulb-on',
            'callbackAction' => 'codebreak',
        ],
    ];

    /**
     * @return bool
     */
    public function canHandle(): bool
    {
        return true;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return 90;
    }

    /**
     * @param string $itemName
     * @return array
     */
    protected function getAdditionalAttributes(string $itemName): array
    {
        return [
            'data-callback-module' => '@passionweb/context-menu/codebreak',
        ];
    }

    /**
     * @param array $items
     * @return array
     */
    public function addItems(array $items): array
    {
        $this->initDisabledItems();
        $localItems = $this->prepareItems($this->itemsConfiguration);

        if (isset($items['info'])) {
            $position = array_search('info', array_keys($items), true);

            $beginning = array_slice($items, 0, $position+1, true);
            $end = array_slice($items, $position, null, true);

            $items = $beginning + $localItems + $end;
        } else {
            $items = $items + $localItems;
        }
        return $items;
    }

    /**
     * @param string $itemName
     * @param string $type
     * @return bool
     */
    protected function canRender(string $itemName, string $type): bool
    {
        return true;
    }



    /*
        TODO: extend settings for following codebreaks
        if (in_array($itemName, $this->disabledItems, true)) {
            return false;
        }
        $canRender = false;
        switch ($itemName) {
            case 'Codebreak Option':
                $canRender = $this->canRenderCodebreakOption();
                break;
        }
        return $canRender;

    /**
     * @return bool
     */
    protected function canRenderCodebreakOption(): bool
    {
        return true;
    }
}