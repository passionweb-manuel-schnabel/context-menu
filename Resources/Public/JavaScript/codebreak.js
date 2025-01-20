/**
 * Module: @passionweb/context-menu/codebreak
 *
 * JavaScript to handle the click action
 */
class ContextMenuActions {
    codebreak(table, uid) {
        if (table === 'pages') {
            top.TYPO3.Notification.success('Context Menu Codebreak', 'This is an example success output', 5);
        }
    };
}

export default new ContextMenuActions();