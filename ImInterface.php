<?php
interface ImInterface {   
  /**
   * 监听消息
   *
   * @params
   * @return
   */
  public function listening() {}
  
  /**
   * 发送消息
   *
   * @params
   * @return
   */
  public function sendMsg() {}
}
?>
