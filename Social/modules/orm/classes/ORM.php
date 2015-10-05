<?php defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {

    public function add_image( $file, $field = NULL, $params = NULL )
    {
        if ( $field !== NULL AND ! $this->loaded() )
        {
            throw new Kohana_Exception( 'Model must be loaded' );
        }

        if ( $params === NULL )
        {
            $params = $this->images();
        }

        $file = trim( $file );

        if ( ! file_exists( $file ) OR is_dir( $file ))
        {
            return NULL;
        }

        $ext = strtolower( pathinfo( $file, PATHINFO_EXTENSION ) );
        $filename = uniqid() . '.' . $ext;

        foreach ( $params as $path => $_params )
        {
            $path = DOCROOT . trim( $path, '/' ) . DIRECTORY_SEPARATOR;

            $local_params = array(
                'width' => NULL,
                'height' => NULL,
                'master' => NULL,
                'quality' => 95,
                'crop' => TRUE
            );

            $_params = Arr::merge( $local_params, $_params );

            if( !empty($_params['subfolder']) )
            {
                $path .= trim($_params['subfolder']) . DIRECTORY_SEPARATOR;
            }

            $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);

            if ( ! is_dir( $path ) )
            {
                mkdir( $path, 0777, TRUE );
                chmod( $path, 0777 );
            }

            $new_file = $path . $filename;

            if ( ! copy( $file, $new_file ) )
            {
                continue;
            }

            chmod( $file, 0777 );

            $image = Image::factory( $file );

            if(!empty($_params['width']) AND !empty($_params['height']))
            {
                if($_params['width'] < $image->width OR $_params['height'] < $image->height )
                    $image->resize( $_params['width'], $_params['height'], $_params['master'] );

                if($_params['crop'])
                    $image->crop( $_params['width'], $_params['height'] );
            }

            $image->save();
        }

        if ( $field !== NULL )
        {
            $this
                ->set($field, $filename)
                ->update();
        }

        unlink( $file );

        return $filename;
    }

    /**
     *
     * @param type $field
     * @return \ORM
     * @throws Kohana_Exception
     */
    public function delete_image( $field )
    {
        if ( ! $this->loaded() )
        {
            throw new Kohana_Exception( 'Model must be loaded' );
        }

        foreach ($this->images() as $path => $data)
        {
            $file = DOCROOT . $path . DIRECTORY_SEPARATOR . $this->get($field);
            if(file_exists($file) AND !is_dir($file))
            {
                unlink($file);
            }
        }

        $this
            ->set($field, '')
            ->update();

        return $this;
    }


}
