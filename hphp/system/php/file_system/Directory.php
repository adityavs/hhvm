<?hh // partial

// This doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.directory.php )
 *
 * Instances of Directory are created by calling the dir() function, not
 * by the new operator.
 *
 */
class Directory {
  public $path;
  public $handle;

  public function __construct($path) {
    $this->path = $path;
    $this->handle = opendir($path);
  }

  public function read() {
    return readdir($this->handle);
  }

  public function rewind() {
    rewinddir($this->handle);
  }

  public function close() {
    closedir($this->handle);
  }
}
