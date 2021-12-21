<?php 
/**
 * Класс File в ООП на PHP
 */ 

	interface iFile
	{
		public function __construct($filePath);
		
		public function getPath(); // путь к файлу
		public function getDir();  // папка файла
		public function getName(); // имя файла
		public function getExt();  // расширение файла
		public function getSize(); // размер файла
		
		public function getText();          // получает текст файла
		public function setText($text); 
			    // устанавливает текст файла 
		public function appendText($text); 
			 // добавляет текст в конец файла 
		
		public function copy($copyPath); 
			   // копирует файл 
		public function delete();           // удаляет файл
		public function rename($newName); 
			  // переименовывает файл 
		public function replace($newPath); 
			 // перемещает файл 
	}

	class File implements iFile
	{
		private $filePath;
		private $name;
		private $ext;
		private $text;
		private $copyPath;
		private $size;
		
		public function __construct($filePath)
		{
			$this->filePath = $filePath;
		}

		public function getPath()
		{
			return $this->filePath;
		}

		public function getDir()
		{
			return $this->filePath;
		}

		public function getName()
		{
			return $this->filePath;
		}

		public function getExt()
		{
			return $this->ext;
		}

		public function getSize()
		{
			return $this->size;
		}

		public function getText()
		{
			return $this->name = file_get_contents($this->getDir());
		}

		public function setText($text)
		{
			$this->text = file_put_contents($this->getDir(), $text);
		}

		public function appendText($text)
		{
			$this->text = file_put_contents($this->getDir(), $text, FILE_APPEND);
		}

		public function copy($copyPath)
		{
			$copyPath = copy($this->getDir(), $copyPath);
			if (!$copyPath) {
				return 'error';
			} else {
				return 'success';
			}
		}

		public function delete()
		{
			if (is_file($this->filePath)) {
				unlink($this->filePath);
				return 'deleted';
			} 
		}

		public function rename($newName)
		{
			if(rename($this->getName(), $newName))
			{
				return 'renamed';
			} else {
				return 'error';	
			}
		}

		public function replace($newPath)
		{
			if (rename($this->getName(), $newPath)) {
				return 'moved';
			} else {
				return 'failed';
			}
		}
	}

?>