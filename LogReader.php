<?php
public function getIndexCacheKey(): string
    {
        return 'log-viewer:log-index:'.implode(':', [
            $this->file->name,
            md5($this->query ?? '')
?>
