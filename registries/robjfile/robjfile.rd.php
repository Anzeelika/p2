<?php
/**
 * File registry
 * @author Ilja Tihhanovski <ilja.tihhanovski@gmail.com>
 * @copyright (c) 2015 Intellisoft OÜ
 */

/**
 * File unit registry
 */
class RobjfileRegistryDescriptor extends SimpleNamedRegistryDescriptor
{

	public function showFile()
	{
		if(!is_object($context = app()->getContext($this->getContextName())))
		{
			$context = $this->createContext();
			if($context->load())
				app()->putContext($context);
		}

		if(is_object($obj = $context->obj) && $obj->canAccess())
		{
 			header('Content-type: ' . $obj->getContentType());
  			header('Content-Disposition: inline; filename="' . basename($obj->name) . '"');
  			header('Content-Transfer-Encoding: binary');
  			header('Accept-Ranges: bytes');
			//TODO
			//header('Content-Description: File Transfer');
			//header('Content-Type: application/octet-stream');
		    //header('Content-Disposition: attachment; filename=' . basename($obj->name));
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
			header('Pragma: public');
		    header('Content-Length: ' . $obj->getFileSize());
		    readfile($obj->getActualPath());
		    exit;
		}
	}

	public function downloadFile()
	{
		if(!is_object($context = app()->getContext($this->getContextName())))
		{
			$context = $this->createContext();
			if($context->load())
				app()->putContext($context);
		}

		if(is_object($obj = $context->obj) && $obj->canAccess())
		{
			header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename=' . basename($obj->name));
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
			header('Pragma: public');
		    header('Content-Length: ' . $obj->getFileSize());
		    readfile($obj->getActualPath());
		    exit;
		}
	}

}

