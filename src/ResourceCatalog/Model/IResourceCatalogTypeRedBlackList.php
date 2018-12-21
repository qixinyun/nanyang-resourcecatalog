<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeRedBlackList
{   
    const TYPE_RED_BLACK_LIST = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['HMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['RED'],
        IResourceCatalog::TYPE['XZCF'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['XZXK'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL'],
        IResourceCatalog::TYPE['SXBZXFRMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['SXBZXZRRMD'] => ISearchableResourceCatalogData::RED_BLACK_LIST['BLACK'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::RED_BLACK_LIST['NULL']
    );
}