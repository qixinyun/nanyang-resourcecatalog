<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeEnName
{
    const TYPE_ENNAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HMD'] => 'hmd',
        IResourceCatalog::TYPE['XZCF'] => 'xzcf',
        IResourceCatalog::TYPE['XZXK'] => 'xzxk',
        IResourceCatalog::TYPE['SXBZXRMD'] => 'sxbzxrmd',
        IResourceCatalog::TYPE['TEST'] => 'test'
    );
}