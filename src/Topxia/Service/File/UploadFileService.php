<?php
namespace Topxia\Service\File\Impl;


interface UploadFileService
{   
	public function getFile($id);

    public function getFileByHashId($hashId);

    public function findFilesByIds(array $ids);

    public function searchFiles($conditions, $sort, $start, $limit);

    public function searchFileCount($conditions);

    public function addFile($targetType,$targetId,array $fileInfo=array(),$implemtor='local',UploadedFile $originalFile=null);

    public function renameFile($id, $newFilename);

    public function deleteFile($id);

    public function deleteFiles(array $ids);


}