<?php

class msMementoItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msMementoItem';
    public $classKey = 'msMementoItem';
    public $languageTopics = ['msmemento'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('msmemento_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('msmemento_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msMementoItemCreateProcessor';