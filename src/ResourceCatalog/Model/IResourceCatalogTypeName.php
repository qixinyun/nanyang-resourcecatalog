<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['HMD'] => '红名单',
        IResourceCatalog::TYPE['XZCF'] => '行政处罚公示信息',
        IResourceCatalog::TYPE['XZXK'] => '行政许可公示信息',
        IResourceCatalog::TYPE['SXBZXFRMD'] => '失信被执行法人名单',
        IResourceCatalog::TYPE['SXBZXZRRMD'] => '失信被执行自然人名单',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}