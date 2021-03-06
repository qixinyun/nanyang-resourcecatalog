<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{
    const TYPE = array(
        'NULL' => 0,
        'HMD' => 1,   
        'XZCF' => 48,
        'XZXK' => 49,
        'SXBZXFRMD' => 50,
        'SXBZXZRRMD' => 51,
        'TEST' => 500          
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(self::TYPE['NULL'], self::TYPE['HMD'], self::TYPE['XZCF'], self::TYPE['XZXK']),
        IUserGroup::ID['SFZHGGWYH'] => array(self::TYPE['TEST']),
        IUserGroup::ID['GQTPXSW'] => array(),
        IUserGroup::ID['SWMB'] => array(),
        IUserGroup::ID['RMYHPXSZXZH'] => array(),
        IUserGroup::ID['SQXJ'] => array(),
        IUserGroup::ID['SZJRMFY'] => array(self::TYPE['SXBZXFRMD'], self::TYPE['SXBZXZRRMD']),
        IUserGroup::ID['SLSJ'] => array(),
        IUserGroup::ID['SGAJ'] => array(),
        IUserGroup::ID['SCZJ'] => array(),
        IUserGroup::ID['SGYHXXHWYH'] => array(),
        IUserGroup::ID['SGYZCJDGLWYH'] => array(),
        IUserGroup::ID['SJYJ'] => array(),
        IUserGroup::ID['SSFJ'] => array(),
        IUserGroup::ID['SRLZYHSHBZJ'] => array(),
        IUserGroup::ID['SJSJ'] => array(),
        IUserGroup::ID['SGHJ'] => array(),
        IUserGroup::ID['SRQYXGS'] => array(),
        IUserGroup::ID['SSLJ'] => array(),
        IUserGroup::ID['SGDGS'] => array(),
        IUserGroup::ID['SLYJ'] => array(),
        IUserGroup::ID['SJTYSJ'] => array(),
        IUserGroup::ID['SLYFZWYH'] => array(),
        IUserGroup::ID['SFDCGLJ'] => array(),
        IUserGroup::ID['SHJBHJ'] => array(),
        IUserGroup::ID['SSWJ'] => array(),
        IUserGroup::ID['SMZJ'] => array(),
        IUserGroup::ID['SNYJ'] => array(),
        IUserGroup::ID['SWHGDXWCBS'] => array(),
        IUserGroup::ID['SGTZYJ'] => array(),
        IUserGroup::ID['SWSHJHSYWYH'] => array(),
        IUserGroup::ID['SGJSWJ'] => array(),
        IUserGroup::ID['SDFSWJ'] => array(),
        IUserGroup::ID['STJJ'] => array(),
        IUserGroup::ID['SSCHZLJGGLJ'] => array(),
        IUserGroup::ID['SAQSCJDGLJ'] => array(),
        IUserGroup::ID['ZGYDPXFGS'] => array(),
        IUserGroup::ID['PXHCZPXBZ'] => array(),
        IUserGroup::ID['SYJFJ'] => array(),
        IUserGroup::ID['SGGZWGLJ'] => array(),
        IUserGroup::ID['ZGDXPXFGS'] => array(),
        IUserGroup::ID['SCSGLXZZFJ'] => array(),
        IUserGroup::ID['ZGLTPXFGS'] => array(),
        IUserGroup::ID['SJGBZWYHBGS'] => array(),
        IUserGroup::ID['STYJ'] => array(),
        IUserGroup::ID['SDAJ'] => array(),
        IUserGroup::ID['SKXJSJ'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}