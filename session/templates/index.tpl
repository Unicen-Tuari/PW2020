{include file="header.tpl"}
   <a href="logout">Logout  </a>
           <div class="col-sm">
                <h1>Tasks</h1>
                <ul class="list-group">
                    {foreach from=$tasks item=task}
                    <li class="list-group-item">
                        <blockquote class="blockquote">
                            <p class="mb-0">
                                <a href="show/{$task['id_task']}">{$task['title']|capitalize}</a>
                                <a href="delete/{$task['id_task']}">
                                    <i data-feather="trash-2"></i>
                                </a>
                                <a href="done/{$task['id_task']}">
                                    <i data-feather="check-square"></i>
                                </a>
                            </p>
                            <footer class="blockquote-footer">{$task['description']}</footer>
                            {if $task['done']}
                            <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                Completed
                            </div>
                            {/if}
                        </blockquote>
                    </li>
                    {/foreach}
                </ul>
            </div>
            <div class="col-sm">
                <h1>Create Task</h1>
                <form action="insert" method="GET">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Task title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Create">
                    </div>
                </form>
            </div>
{include file="footer.tpl"}
