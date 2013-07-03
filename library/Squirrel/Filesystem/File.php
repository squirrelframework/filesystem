<?php

namespace Squirrel\Filesystem;

/**
 * Interface for filesystem files.
 *
 * @package Squirrel\Filesystem
 * @author Valérian Galliat
 */
class File extends Path
{
    /**
     * @var string[string] List of file types indexed by extension.
     */
    protected static $mimeTypes = array(
        '323' => 'text/h323',
        '7z' => 'application/x-7z-compressed',
        'abw' => 'application/x-abiword',
        'acx' => 'application/internet-property-stream',
        'ai' => 'application/postscript',
        'aif' => 'audio/x-aiff',
        'aifc' => 'audio/x-aiff',
        'aiff' => 'audio/x-aiff',
        'amf' => 'application/x-amf',
        'asf' => 'video/x-ms-asf',
        'asr' => 'video/x-ms-asf',
        'asx' => 'video/x-ms-asf',
        'atom' => 'application/atom+xml',
        'avi' => 'video/avi',
        'bin' => 'application/octet-stream',
        'bmp' => 'image/bmp',
        'c' => 'text/x-csrc',
        'c++' => 'text/x-c++src',
        'cab' => 'application/x-cab',
        'cc' => 'text/x-c++src',
        'cda' => 'application/x-cdf',
        'class' => 'application/octet-stream',
        'cpp' => 'text/x-c++src',
        'cpt' => 'application/mac-compactpro',
        'csh' => 'text/x-csh',
        'css' => 'text/css',
        'csv' => 'text/x-comma-separated-values',
        'dbk' => 'application/docbook+xml',
        'dcr' => 'application/x-director',
        'deb' => 'application/x-debian-package',
        'diff' => 'text/x-diff',
        'dir' => 'application/x-director',
        'divx' => 'video/divx',
        'dll' => 'application/octet-stream',
        'dmg' => 'application/x-apple-diskimage',
        'dms' => 'application/octet-stream',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'dvi' => 'application/x-dvi',
        'dxr' => 'application/x-director',
        'eml' => 'message/rfc822',
        'eps' => 'application/postscript',
        'evy' => 'application/envoy',
        'exe' => 'application/x-msdos-program',
        'fla' => 'application/octet-stream',
        'flac' => 'application/x-flac',
        'flc' => 'video/flc',
        'fli' => 'video/fli',
        'flv' => 'video/x-flv',
        'gif' => 'image/gif',
        'gtar' => 'application/x-gtar',
        'gz' => 'application/x-gzip',
        'h' => 'text/x-chdr',
        'h++' => 'text/x-c++hdr',
        'hh' => 'text/x-c++hdr',
        'hpp' => 'text/x-c++hdr',
        'hqx' => 'application/mac-binhex40',
        'hs' => 'text/x-haskell',
        'htm' => 'text/html',
        'html' => 'text/html',
        'ico' => 'image/x-icon',
        'ics' => 'text/calendar',
        'iii' => 'application/x-iphone',
        'ins' => 'application/x-internet-signup',
        'iso' => 'application/x-iso9660-image',
        'isp' => 'application/x-internet-signup',
        'jar' => 'application/java-archive',
        'java' => 'application/x-java-applet',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'latex' => 'application/x-latex',
        'lha' => 'application/octet-stream',
        'log' => 'text/plain',
        'lzh' => 'application/octet-stream',
        'm4a' => 'audio/mpeg',
        'm4p' => 'video/mp4v-es',
        'm4v' => 'video/mp4',
        'man' => 'application/x-troff-man',
        'mdb' => 'application/x-msaccess',
        'midi' => 'audio/midi',
        'mid' => 'audio/midi',
        'mif' => 'application/vnd.mif',
        'mka' => 'audio/x-matroska',
        'mkv' => 'video/x-matroska',
        'mov' => 'video/quicktime',
        'movie' => 'video/x-sgi-movie',
        'mp2' => 'audio/mpeg',
        'mp3' => 'audio/mpeg',
        'mp4' => 'application/mp4',
        'mpa' => 'video/mpeg',
        'mpe' => 'video/mpeg',
        'mpeg' => 'video/mpeg',
        'mpg' => 'video/mpeg',
        'mpg4' => 'video/mp4',
        'mpga' => 'audio/mpeg',
        'mpp' => 'application/vnd.ms-project',
        'mpv' => 'video/x-matroska',
        'mpv2' => 'video/mpeg',
        'ms' => 'application/x-troff-ms',
        'msg' => 'application/msoutlook',
        'msi' => 'application/x-msi',
        'nws' => 'message/rfc822',
        'oda' => 'application/oda',
        'odb' => 'application/vnd.oasis.opendocument.database',
        'odc' => 'application/vnd.oasis.opendocument.chart',
        'odf' => 'application/vnd.oasis.opendocument.forumla',
        'odg' => 'application/vnd.oasis.opendocument.graphics',
        'odi' => 'application/vnd.oasis.opendocument.image',
        'odm' => 'application/vnd.oasis.opendocument.text-master',
        'odp' => 'application/vnd.oasis.opendocument.presentation',
        'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
        'odt' => 'application/vnd.oasis.opendocument.text',
        'oga' => 'audio/ogg',
        'ogg' => 'application/ogg',
        'ogv' => 'video/ogg',
        'otg' => 'application/vnd.oasis.opendocument.graphics-template',
        'oth' => 'application/vnd.oasis.opendocument.web',
        'otp' => 'application/vnd.oasis.opendocument.presentation-template',
        'ots' => 'application/vnd.oasis.opendocument.spreadsheet-template',
        'ott' => 'application/vnd.oasis.opendocument.template',
        'p' => 'text/x-pascal',
        'pas' => 'text/x-pascal',
        'patch' => 'text/x-diff',
        'pbm' => 'image/x-portable-bitmap',
        'pdf' => 'application/pdf',
        'php' => 'application/x-httpd-php',
        'php3' => 'application/x-httpd-php',
        'php4' => 'application/x-httpd-php',
        'php5' => 'application/x-httpd-php',
        'phps' => 'application/x-httpd-php-source',
        'phtml' => 'application/x-httpd-php',
        'pl' => 'text/x-perl',
        'pm' => 'text/x-perl',
        'png' => 'image/png',
        'po' => 'text/x-gettext-translation',
        'pot' => 'application/vnd.ms-powerpoint',
        'pps' => 'application/vnd.ms-powerpoint',
        'ppt' => 'application/powerpoint',
        'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'ps' => 'application/postscript',
        'psd' => 'application/x-photoshop',
        'pub' => 'application/x-mspublisher',
        'py' => 'text/x-python',
        'qt' => 'video/quicktime',
        'ra' => 'audio/x-realaudio',
        'ram' => 'audio/x-realaudio',
        'rar' => 'application/rar',
        'rgb' => 'image/x-rgb',
        'rm' => 'audio/x-pn-realaudio',
        'rpm' => 'audio/x-pn-realaudio-plugin',
        'rss' => 'application/rss+xml',
        'rtf' => 'text/rtf',
        'rtx' => 'text/richtext',
        'rv' => 'video/vnd.rn-realvideo',
        'sea' => 'application/octet-stream',
        'sh' => 'text/x-sh',
        'shtml' => 'text/html',
        'sit' => 'application/x-stuffit',
        'smi' => 'application/smil',
        'smil' => 'application/smil',
        'so' => 'application/octet-stream',
        'src' => 'application/x-wais-source',
        'svg' => 'image/svg+xml',
        'swf' => 'application/x-shockwave-flash',
        't' => 'application/x-troff',
        'tar' => 'application/x-tar',
        'tcl' => 'text/x-tcl',
        'tex' => 'application/x-tex',
        'text' => 'text/plain',
        'texti' => 'application/x-texinfo',
        'textinfo' => 'application/x-texinfo',
        'tgz' => 'application/x-tar',
        'tif' => 'image/tiff',
        'tiff' => 'image/tiff',
        'torrent' => 'application/x-bittorrent',
        'tr' => 'application/x-troff',
        'tsv' => 'text/tab-separated-values',
        'txt' => 'text/plain',
        'wav' => 'audio/x-wav',
        'wax' => 'audio/x-ms-wax',
        'wbxml' => 'application/wbxml',
        'webm' => 'video/webm',
        'wm' => 'video/x-ms-wm',
        'wma' => 'audio/x-ms-wma',
        'wmd' => 'application/x-ms-wmd',
        'wmlc' => 'application/wmlc',
        'wmv' => 'video/x-ms-wmv',
        'wmx' => 'video/x-ms-wmx',
        'wmz' => 'application/x-ms-wmz',
        'word' => 'application/msword',
        'wp5' => 'application/wordperfect5.1',
        'wpd' => 'application/vnd.wordperfect',
        'wvx' => 'video/x-ms-wvx',
        'xbm' => 'image/x-xbitmap',
        'xcf' => 'image/xcf',
        'xhtml' => 'application/xhtml+xml',
        'xht' => 'application/xhtml+xml',
        'xl' => 'application/excel',
        'xla' => 'application/excel',
        'xlc' => 'application/excel',
        'xlm' => 'application/excel',
        'xls' => 'application/excel',
        'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'xlt' => 'application/excel',
        'xml' => 'text/xml',
        'xof' => 'x-world/x-vrml',
        'xpm' => 'image/x-xpixmap',
        'xsl' => 'text/xml',
        'xvid' => 'video/x-xvid',
        'xwd' => 'image/x-xwindowdump',
        'z' => 'application/x-compress',
        'zip' => 'application/x-zip',
    );

    /**
     * Gets extension by MIME type.
     *
     * @param string $mimeType MIME type.
     * @param string|null $default Optional default value.
     * @return string
     */
    public static function extensionByMime($mimeType, $default = null)
    {
        $mimeTypes = array_flip(self::$mimeTypes);
        return isset($mimeTypes[$mimeType]) ? $mimeTypes[$mimeType] : $default;
    }

    /**
     * Gets MIME type by extension.
     *
     * @param string $extension Extension to search for.
     * @param string|null $default Optional default value.
     * @return string
     */
    public static function mimeByExtension($extension, $default = null)
    {
        return isset(self::$mimeTypes[$extension]) ? self::$mimeTypes[$extension] : $default;
    }

    /**
     * Includes given file without any context and propagates returned value.
     *
     * @param string
     * @return mixed
     */
    protected static function __process()
    {
        return include func_get_arg(0);
    }

    /**
     * {@inheritdoc}
     */
    public function exists()
    {
        return is_file($this->path);
    }

    /**
     * {@inheritdoc}
     */
    public function remove()
    {
        if (!$this->exists()) {
            return true;
        }

        return unlink($this->path);
    }

    /**
     * {@inheritdoc}
     */
    public function create($mode = 0777)
    {
        if ($this->exists()) {
            return true;
        }

        return $this->getFolder()->create()       &&
               file_put_contents($this->path, '') &&
               chmod($this->path, $mode);
    }

    /**
     * Processes file as PHP and returns value.
     *
     * @return mixed
     */
    public function process()
    {
        return self::__process($this->path);
    }

    /**
     * Sets file extension according to given MIME type.
     *
     * @param string $mimeType
     * @return $this
     */
    public function setType($mimeType)
    {
        return $this->setExtension(self::extensionByMime($mimeType));
    }

    /**
     * Gets file MIME type.
     *
     * @return string
     */
    public function getType()
    {
        return self::mimeByExtension($this->getExtension());
    }

    /**
     * Sets file extension.
     *
     * @todo
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        if (empty($extension))
        {
            // Remove extension
            return $this->removeExtension();
        }

        // $path = $this->path->cut(0, )

        return $this;
    }

    /**
     * Removes file extension.
     *
     * @todo
     * @return $this
     */
    public function removeExtension()
    {
        return $this;
    }

    /**
     * Gets file extension.
     *
     * @return string
     */
    public function getExtension()
    {
        return pathinfo($this->path, PATHINFO_EXTENSION);
    }

    /**
     * Sets file content.
     *
     * @see file_put_contents()
     * @param string $content
     * @param integer $flags
     * @return integer|false Written bytes or false on failure.
     */
    public function setContent($content, $flags = 0)
    {
        return file_put_contents($this->path, $content, $flags);
    }

    /**
     * Gets file content.
     *
     * @see file_get_contents()
     * @return string
     */
    public function getContent()
    {
        return file_get_contents($this->path);
    }

    /**
     * Gets base name.
     *
     * @return string
     */
    public function getBaseName()
    {
        return pathinfo($this->path, PATHINFO_BASENAME);
    }

    /**
     * Gets file name.
     *
     * @return string
     */
    public function getFileName()
    {
        return pathinfo($this->path, PATHINFO_FILENAME);
    }

    /**
     * Gets parent folder.
     *
     * @return Folder
     */
    public function getFolder()
    {
        return new Folder(dirname($this->path));
    }
}
