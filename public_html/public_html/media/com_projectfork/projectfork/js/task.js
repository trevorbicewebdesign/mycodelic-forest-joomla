/**
 * @package      Projectfork
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2012 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */


/**
 * A collection of task related functions
 *
 */
var PFtask =
{
    track_url: null,
    track_win_opts: null,

    setTimeTracker: function(turl, topts)
    {
        PFtask.track_url = turl;
        PFtask.track_win_opts = topts;
    },

    trackItem: function(tid)
    {
        window.open(PFtask.track_url + '&cid[]=' + tid, 'winPFtimerec', PFtask.track_win_opts);
    },

    /**
     * Function to mark a task as complete/incomplete
     *
     * @param  integer   i     The item number
     * @param  string    fi    The form id (optional)
     */
    complete: function(i, fi)
    {
        var cid  = 'cb' + i;
        var btn  = jQuery('#complete-btn-' + i);
        var c    = jQuery('#complete' + i);
        var item = jQuery('#list-item-' + i);

        btn.addClass('disabled');
        var rq = PFlist.listItemTask(cid, 'tasks.complete', fi, true);

        rq.done(function(resp)
        {
            btn.removeClass('disabled');

            if (resp != false) {
                btn.removeClass('btn-danger');

                var v = c.val();

                if (v == '0') {
                    c.val('1');
                    btn.addClass('btn-success');
                    btn.addClass('active');
                    item.addClass('complete');
                }
                else {
                    c.val('0');
                    btn.removeClass('btn-success');
                    btn.removeClass('active');
                    item.removeClass('complete');
                }
            }
            else {
                btn.addClass('btn-danger');
            }
        });
    },

    priority: function(i, v, t, fi)
    {
        var cid  = 'cb' + i;
        var p    = jQuery('#priority' + i);

        p.val(v);

        var rq = PFlist.listItemTask(cid, 'tasks.priority', fi, true);

        rq.done(function(resp)
        {
            if (resp != false) {
                var l = jQuery('#list-item-' + i);

                if (l.length) {

                    l.removeClass('priority-1');
                    l.removeClass('priority-2');
                    l.removeClass('priority-3');
                    l.removeClass('priority-4');
                    l.removeClass('priority-5');
                    
                    if (v == 1) {
                        l.addClass('priority-1');
                    }
                    if (v == 2) {
                        l.addClass('priority-2');
                    }
                    if (v == 3) {
                        l.addClass('priority-3');
                    }
                    if (v == 4) {
                        l.addClass('priority-4');
                    }
                    if (v == 5) {
                        l.addClass('priority-5');
                    }

                }
            }
        });
    }
}


function jSelectUser_PFtaskAssignUser(id, title)
{
    SqueezeBox.close();

    var ti = jQuery('#target-item');

    if (ti.length) {
        var i   = ti.val();
        var f   = jQuery('#assigned' + i);
        var cid = 'cb' + i;

        if (f.length) {
            f.val(id);

            var rq = PFlist.listItemTask(cid, 'tasks.addUsers', 'adminForm', true);

            rq.done(function(resp)
            {
                f.val(0);

                if (Projectfork.isJsonString(resp)) {
                    var lbl = jQuery('#assigned_' + i + '_label');

                    if (lbl.length) {
                        var c = lbl.html();

                        if (c == '') {
                            lbl.addClass('label');
                            lbl.html('<i class="icon-user  icon-white"></i> ' + title);
                        }
                        else {
                            var pts   = c.split('+');

                            if (pts.length == 1) {
                                pts[1] = 0;
                            }

                            var count = parseInt(pts[1]) + 1;

                            lbl.html(pts[0] + ' +' + count);
                        }
                    }
                }
            });
        }
    }
}