@extends('layouts.base')
<style>
    p,
    div,
    span,
    li,
    th {
        font-size: 18px !important;
    }
    th {
        font-weight: 100 !important;
    }
</style>
@section('content')
    {{-- ======================================================================================== --}}
    <p>
        当サイト運営者（以下「運営者」といいます。）は、運営者の提供するサービス（以下「本
        サービス」といいます。）における、ユーザーについての個人情報を含む利用者情報の取扱
        いについて、以下のとおりプライバシーポリシー（以下「本ポリシー」といいます。）を定
        めます。なお、本サービスを利用するに際しては、本ポリシーに同意しなければならないも
        のとし、本サービス利用者は本ポリシーに同意したものとみなします。
    </p>
    <br>
    <div>
        1. 収集する利用者情報及び収集方法
    </div>
    <div>
        本ポリシーにおいて、「利用者情報」とは、ユーザーの識別に係る情報、通信サービス上の
        行動履歴、その他ユーザーまたはユーザーの端末に関連して生成または蓄積された情報で
        あって、本ポリシーに基づき運営者が収集するものを意味するものとします。
        本サービスにおいて運営者が収集する利用者情報は、その収集方法に応じて、以下のような
        ものとなります。
    </div>
    <span class="pl-15">
        ユーザーからご提供いただく情報
    </span>
    <br>
    <span class="pl-15">
        本サービスを利用するために、または本サービスの利用を通じてユーザーからご提供いただく情報は以下のとおりです。
    </span>
    <p>
        <li class="pl-18">
            氏名
        </li>
        <li class="pl-18">
            メールアドレス
        </li>
        <li class="pl-18">
            クレジットカード情報
        </li>
    </p>
    {{-- ======================================================================================== --}}
    <div>
        2. 利用目的
    </div>
    <div>
        本サービスのサービス提供にかかわる利用者情報の具体的な利用目的は以下のとおりです。
    </div>
    <span class="pl-15">
        (1) 本サービスに関する登録の受付、本人確認、ユーザー認証、ユーザー設定の記録、利用料金の決済計算等本サービスの提供、維持、保護及び改善のため
    </span><br>
    <span class="pl-15">
        (2) ユーザーに有益と思われるサービスや企画、情報を送信するため
    </span><br>
    <span class="pl-15">
        (3) ユーザーと直接又は間接的に連絡をとるため
    </span><br>
    <span class="pl-15">
        (4) 本サービスの向上に対して、ユーザーの意見・感想を求めるため
    </span><br>
    <span class="pl-15">
        (5) ユーザーのトラフィック測定及び行動測定のため
    </span><br>
    <span class="pl-15">
        (5) ユーザーのトラフィック測定及び行動測定のため
    </span><br>
    <span class="pl-15">
        (6) 広告の配信、表示及び効果測定のため
    </span><br>
    <span class="pl-15">
        (7) 本サービスに関するご案内、お問い合わせ等への対応のため
    </span><br>
    <span class="pl-15">
        (8) 本サービスに関する運営者の規約、ポリシー等（以下「規約等」といいます。）に違反する行為に対する対応のため
    </span><br>
    <span class="pl-15">
        (9) 本サービスに関する規約等の変更などを通知するため
    </span><br><br>
    {{-- ======================================================================================== --}}
    <div>
        3. 第三者提供
    </div>
    <div>
        運営者は、利用者情報のうち、個人情報については、あらかじめユーザーの同意を得ないで、第三者（日本国外にある者を含みます。）に提供しません。但し、次に掲げる場合に該当し、第三者（日本国外にある者を含みます。）に提供する場合はこの限りではありません。
    </div>
    <span class="pl-15">
        (1) 運営者が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合
    </span><br>
    <span class="pl-15">
        (2) 合併その他の事由による事業の承継に伴って個人情報が提供される場合
    </span><br>
    <span class="pl-15">
        (3) 第 4 項の定めに従って、個人情報が提供される場合
    </span><br>
    <span class="pl-15">
        (4) 国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、ユーザーの同意を得ることによって当該事務の遂行に支障を及ぼすおそれがある場合
    </span><br>
    <span class="pl-15">
        (5) その他、個人情報の保護に関する法律（以下「個人情報保護法」といいます。）その他の法令で認められる場合
    </span><br><br>
    {{-- ======================================================================================== --}}
    <div>
        4. 個人情報の開示
    </div>
    <div>
        運営者は、ユーザーから、個人情報保護法の定めに基づき個人情報の開示を求められたときは、ユーザーご本人からのご請求であることを確認の上で、ユーザーに対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。但し、個人情報保護法その他の法令により、運営者が開示の義務を負わない場合は、この限りではありません。なお、個人情報の開示につきましては、手数料（1
        件あたり 1,000 円）を頂戴しておりますので、あらかじめ御了承ください。
    </div><br>
    {{-- ======================================================================================== --}}
    <div>
        5.利用者情報の外部送信
    </div>
    <div>
        運営者は、Cookie 及び Web ビーコンを利用し、お客様に関する情報を収集した上で、外部事業者にこれを送信しています。外部事業者の名称、送信される情報、及びかかる情報の利用目的については、以下をご確認下さい。
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    外部事業者の名称
                </th>
                <th>
                    外部事業者に送信される情報
                </th>
                <th>
                    送信される情報の利用目的
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    Google LLC（例）
                </th>
                <th>
                    <li class="pl-5">
                        ユーザーの本サービスの閲覧履歴
                    </li>
                    <li class="pl-5">
                        Cookie 情報
                    </li>
                    <li class="pl-5">
                        IP アドレス
                    </li>
                    <li class="pl-5">
                        端末及びブラウザ固有の識別情報
                    </li>
                </th>
                <th>
                    <li class="pl-5">
                        ・お客様情報を分析し、本サービスのパフォーマンス向上・マーケティング調査を行うため
                    </li>
                    <li class="pl-5">
                        ・Google LLC の情報利用目的については、以下をご参照ください。
                    </li>
                    <li class="pl-5">
                        www.google.com/analytics/policies/
                    </li>
                </th>
            </tr>
        </tbody>
    </table><br>
    {{-- ======================================================================================== --}}
    <div>
        6. 個人情報の訂正及び利用停止等
    </div>
    <div class="row">
        <span class="col-md-1" style="max-width: 60px; padding-right: 0">
            6-1
        </span>
        <span class="col-md-11" style="padding-left: 0">
            運営者は、ユーザーから、(1)個人情報が真実でないという理由によって個人情報保護法の定めに基づきその内容の訂正を求められた場合、及び(2)あらかじめ公表された利用目的の範囲を超えて取扱われているという理由または偽りその他不正の手段により収集されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止を求められた場合には、ユーザーご本人からのご請求であることを確認の上で遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正または利用停止を行い、その旨をユーザーに通知します。なお、訂正または利用停止を行わない旨の決定をしたときは、ユーザーに対しその旨を通知いたします。
        </span>
    </div>
    <br>
    <div class="row">
        <span class="col-md-1" style="max-width: 60px; padding-right: 0">
            6-2
        </span>
        <span class="col-md-11" style="padding-left: 0">
            運営者は、ユーザーから、ユーザーの個人情報について消去を求められた場合、運営者が当該請求に応じる必要があると判断した場合は、ユーザーご本人からのご請求であることを確認の上で、個人情報の消去を行い、その旨をユーザーに通知します。
        </span>
    </div>
    <br>
    <div class="row">
        <span class="col-md-1" style="max-width: 60px; padding-right: 0">
            6-3
        </span>
        <span class="col-md-11" style="padding-left: 0">
            個人情報保護法その他の法令により、運営者が訂正等または利用停止等の義務を負わない場合は、6-1 および 6-2 の規定は適用されません。
        </span>
    </div>
    <br>
    {{-- ======================================================================================== --}}
    <div>
        7. お問い合わせ窓口
    </div>
    <div>
        ご意見、ご質問、苦情のお申出その他利用者情報の取扱いに関するお問い合わせは、下記の窓口までお願いいたします。
    </div>
    <br>
    <div>
        GRAB カスタマーサポート
    </div>
    <div>
        アドレス：grab202404@gmail.com
    </div>
    <br>
    {{-- ======================================================================================== --}}
    <div>
        8. プライバシーポリシーの変更手続
    </div>
    <div>
        運営者は、必要に応じて、本ポリシーを変更します。但し、法令上ユーザーの同意が必要となるような本ポリシーの変更を行う場合、変更後の本ポリシーは、運営者所定の方法で変更に同意したユーザーに対してのみ適用されるものとします。なお、運営者は、本ポリシーを変更する場合には、変更後の本ポリシーの施行時期及び内容を運営者のウェブサイト上での表示その他の適切な方法により周知し、またはユーザーに通知します。
    </div>
<br>
<p>
    【2024 年 4 月 1 日制定】
</p>
@endsection

@section('add_js')
@endsection

