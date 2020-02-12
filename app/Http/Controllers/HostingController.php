<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
  /**
   * Json FileName
   * 
   * @var string
   */

  const JSON_FILE = "hosting.json";

  /**
   * File Directory
   * 
   * @var string
   */
  const FILE_DIR = "js";

  public function parse()
  {
    return response()->json(json_decode($this->getContents(), true));
  }

  /**
   * Get content json file
   * 
   * @return string
   */
  public function getContents(): string
  {
    return \file_get_contents(sprintf("%s/app/public/%s", storage_path(), self::JSON_FILE));
  }
}
