<div class="paginator">
  <ul class="pagination">
      <?php 
      if ($this->Paginator->hasPage(2)) 
      {
        echo ("<hr>"); 
        echo $this->Paginator->first('<< ' . __('first'));
        if($this->Paginator->hasPrev())
        {
          echo (" ... ");
          echo $this->Paginator->prev('< ' . __('previous'));
        }
        echo (" | ");
      }
      echo $this->Paginator->numbers();
      if ($this->Paginator->hasPage(2)) 
      { 
        echo (" | ");
        if($this->Paginator->hasNext())
        {
          echo $this->Paginator->next(__('next') . ' >');
          echo (" ... ");
        }
        echo $this->Paginator->last(__('last') . ' >>');
      } 
      ?>
  </ul>
  <p><?= $this->Paginator->counter(['format' => __('Trang {{page}} / {{pages}}, hiển thị {{current}} trong tổng số {{count}} kết quả')]) ?></p>
</div>
