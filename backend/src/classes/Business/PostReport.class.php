<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2014-04-22 18:38:55                    *
 *   This file will never be generated again - feel free to edit.            *
 *****************************************************************************/

	class PostReport extends AutoPostReport implements Prototyped, DAOConnected
	{
		/**
		 * @return PostReport
		**/
		public static function create()
		{
			return new self;
		}
		
		/**
		 * @return PostReportDAO
		**/
		public static function dao()
		{
			return Singleton::getInstance('PostReportDAO');
		}
		
		/**
		 * @return ProtoPostReport
		**/
		public static function proto()
		{
			return Singleton::getInstance('ProtoPostReport');
		}

        public function export()
        {
            return [
                'date' => $this->getDate()->toStamp(),
                'message' => $this->getReason(),
            ];
        }

	}
?>