<?php 
/**
 * Класс FileManipulator
 */ 
class FileManipulator
	{
		private $filePath;

		public function __construct($filePath)
		{
			$this->filePath = $filePath;
		}

		public function getFile()
		{
			return $this->filePath;
		}

		public function create($data)
		{
			file_put_contents($this->getFile(), $data);
		}
		
		public function delete()
		{
			if (is_file($this->filePath)) {
				unlink($this->filePath);
			} else {
				return 'file is doesn\t exists';
			}
		}
		
		public function copy($copyPath)
		{
			if (!copy($this->getFile(), $copyPath)) {
				return 'failed to copy';
			} else {
				return 'Copied succesfully';
			}
		}
		
		public function rename($newName)
		{
			if (!rename($this->getFile(), $newName)) {
				return 'failed to rename';
			} else {
				return 'renamed succesfully';
			}
		}
		
		public function replace($newPath)
		{
			if (!rename($this->getFile(), $newPath)) {
				return 'failed to move file';
			} else {
				return 'file is move succesfully';
			}
		}
		
		public function weight()
		{
			return filesize($this->filePath);
		}
	}
	$fm = new FileManipulator('dir/new.txt');
	/**
	 * create file
	 */ 
	echo $fm->weight();
?>