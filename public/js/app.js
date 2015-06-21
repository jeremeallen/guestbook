new Vue({
    el: '#guestbook',

    data: {
        comments: [],
        text: '',
        author: ''
    },

    ready: function() {
        this.getMessages();
    },

    methods: {
        getMessages: function() {
            $.ajax({
                context: this,
                url: "/api/comment",
                success: function (result) {
                    this.$set("comments", result)
                }
            })
        },

        onCreate: function(e) {
            e.preventDefault()
            $.ajax({
                context: this,
                type: "POST",
                data: {
                    author: this.author,
                    text: this.text
                },
                url: "/api/comment",
                success: function(result) {
                    this.comments.push(result);
                    this.author = ''
                    this.text = ''
                }
            })
        },

        onDelete: function (comment) {
            var do_delete = confirm("Are you sure?");

            if(!do_delete)  return;
            
            $.ajax({
                context: comment,
                type: "DELETE",
                url: "/api/comment/" + comment.id,
            })
            this.comments.$remove(comment);
        }
    }
})