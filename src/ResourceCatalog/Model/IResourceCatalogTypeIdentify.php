<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HMD'] => 'HMD',
        IResourceCatalog::TYPE['XZCF'] => 'XZCF',
        IResourceCatalog::TYPE['XZXK'] => 'XZXK',
        IResourceCatalog::TYPE['SXBZXFRMD'] => 'SXBZXFRMD',
        IResourceCatalog::TYPE['SXBZXZRRMD'] => 'SXBZXZRRMD',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}