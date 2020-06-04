{include file="header.tpl"}
            <div class="col-sm">
                  {if $task['done']}
                  <div class="badge badge-primary text-wrap" style="width: 6rem;">
                      Completed
                  </div>
                  {/if}
                  <h1>{$task['title']}</h1>
                  <p>{$task['description']}</p>
            </div>
{include file="footer.tpl"}