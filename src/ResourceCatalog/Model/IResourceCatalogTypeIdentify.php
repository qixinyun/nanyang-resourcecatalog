<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HMD'] => 'HMD',
        IResourceCatalog::TYPE['XZCF'] => 'XZCF',
        IResourceCatalog::TYPE['XZXK'] => 'XZXK',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'SXBZXRMD',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}